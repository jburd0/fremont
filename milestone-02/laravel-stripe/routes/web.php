<?php

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

\Stripe\Stripe::setApiKey("");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stripe', function() {
	return \Stripe\Charge::create(array(
		"amount" => 1000,
		"currency" => "usd",
		"description" => "Test Charge",
		"source" => 'tok_mastercard',
	));

});
