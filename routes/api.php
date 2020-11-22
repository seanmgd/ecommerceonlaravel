<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Product routes
Route::get('/products', 'ProductController@indexApi');
Route::get('/product/{slug}', 'ProductController@showApi');
Route::post('/product', 'ProductController@storeApi');
Route::patch('/product/{id}', 'ProductController@updateApi');
Route::delete('/product/{id}', 'ProductController@destroyApi');

//Artist routes
Route::get('/artists', 'ArtistController@indexApi');
Route::get('/artist/{slug}', 'ArtistController@showApi');
Route::post('/artist', 'ArtistController@storeApi');
Route::patch('/artist/{id}', 'ArtistController@updateApi');
Route::delete('/artist/{id}', 'ArtistController@destroyApi');

//Video route
Route::get('/videos', 'VideoController@indexApi');
Route::get('/video/{slug}', 'VideoController@showApi');
Route::post('/video', 'VideoController@storeApi');
Route::patch('/video/{id}', 'VideoController@updateApi');
Route::delete('/video/{id}', 'VideoController@destroyApi');

//Cart routes
Route::get('/cart', 'CartController@indexApi');
Route::get('/cart/reset', 'CartController@resetApi');
Route::post('/cart', 'CartController@storeApi');
Route::delete('/cart/{product}', 'CartController@destroyApi');
