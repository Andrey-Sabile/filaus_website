<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\{Stripe, Customer, Checkout};
use App\Models\Charge;

class ChargeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('charge.create');
    }

    public function store(Request $request)
    {
        // validate form data
        request()->validate([
            'name' => 'required',
            'mobile-number' => 'required',
        ]);

        // Get form data and store into database
        Charge::create([
            'name' => request('name'),
            'student_number' => request('student-number'),
            'mobile_number' => request('mobile-number'),
            'dietary_requirements' => request('dietary-requirements')
        ]);

        // Create stripe customer
        Stripe::setApiKey(config('services.stripe.secret'));
        $customer = Customer::create([
            'name' => request('name'),
            'phone' => request('mobile-number')
        ]);

        // Create stripe checkout session
        $session =\Stripe\Checkout\Session::create([
            'customer' => $customer->id,
            'payment_method_types' => ['card'],
            'mode' => 'payment',
            'allow_promotion_codes' => true,
            'success_url' => 'https://www.filausuwa.live/charge/success',
            'cancel_url' => 'https://www.filausuwa.live/charge',
            'line_items' => [
                [
                    'quantity' => 1,
                    'price' => 'price_1HMzsfJNG7JBtCCyxxDDc8C0'
                ]
            ]
        ]);

        // redirect to view that calls checkout session
        $session_id = $session->id;
        return view('charge.checkout', ['session_id'=>$session_id]);
    }

    public function success(Charge $charge)
    {
        // Display success page
        return view('charge.success');
    }
}
