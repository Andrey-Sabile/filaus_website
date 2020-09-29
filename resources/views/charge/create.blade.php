@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<script src="https://js.stripe.com/v3/"></script>
<div class="flex flex-col lg:flex lg:flex-row justify-evenly">
<div class="flex flex-col justify-items-center items-center lg:w-2/3">
    <h2 class='my-8 text-3xl'>Register for event</h2>
    <form class="w-full max-w-lg px-4" id="payment-form" method="POST" action="/charge" >
        @csrf
       
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Name*
              </label>
            <input name="name" class="@error('mobile-number') border-red-500 @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-name" type="name" placeholder="Enter Name">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="student-number">
              Student number
            </label>
            <input name="student-number" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-student-number" type="number" placeholder="Enter student number">
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mobile-number">
              Mobile number*
            </label>
            <input name="mobile-number" class="@error('mobile-number') border-red-500 @enderror appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-mobile-number" type="tel" placeholder="Enter mobile number">
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dietary-requirements">
              Dietary requirements
            </label>
            <textarea name="dietary-requirements" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dietary-requirements" type="text" placeholder="Enter any dietary requirements or allergies"></textarea>
          </div>
        </div>

        <div class="md:flex md:items-center pb-4">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                Proceed to Checkout
              </button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection