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
Route::get('/shop', 'ProductController@indexApi');
Route::get('/shop/{product}', 'ProductController@showApi');

//Video route
Route::get('/videos', 'VideoController@indexApi');

//Cart routes
Route::get('/cart', 'CartController@indexApi');
Route::get('/cart/reset', 'CartController@resetApi');
Route::post('/cart', 'CartController@storeApi');
Route::delete('/cart/{product}', 'CartController@destroyApi');
