<?php

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

//Homepage routes
Route::view('/', 'home.index')->name('home');
Route::view('/contact', 'home.contact')->name('contact');

//Contact form route
Route::post('/contact', function (Request $request) {
    Mail::send(new ContactMail($request));
    return redirect('contact')->with('success', 'Message successfully sent');
});

//Video routes
Route::get('/works', 'VideoController@index')->name('videos');

//Cart routes
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/reset', 'CartController@reset')->name('cart.reset');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

//Checkout routes
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'CheckoutController@success')->name('checkout.success');

//Product routes
Route::get('/shop', 'ProductController@index')->name('shop');
Route::get('/shop/{product}', 'ProductController@show')->name('product');
