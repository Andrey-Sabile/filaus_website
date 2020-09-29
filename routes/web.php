<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@show');

// Event ticketing end points
Route::get('/charge', 'App\Http\Controllers\ChargeController@create');
Route::get('/charge/success', 'App\Http\Controllers\ChargeController@success');
Route::post('/charge', 'App\Http\Controllers\ChargeController@store');