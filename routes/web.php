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

Route::get('/', 'HomeController@index')->name('home');
Route::view('/works', 'home.works')->name('works');
Route::view('/contact', 'home.contact')->name('contact');

Route::get('/shop', 'ProductController@index')->name('shop');
Route::get('/shop/product', 'ProductController@create')->name('new');
Route::post('/shop/store', 'ProductController@store')->name('store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
