<?php

use Illuminate\Http\Request;

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
JsonApi::register('default')->routes(function ($api) {
  $api->resource('restaurants')->relationships(function ($relations) {
    $relations->hasMany('dishes');
  });
  $api->resource('dishes')->relationships(function ($relations) {
    $relations->hasOne('restaurant');
  });

  $api->resource('addresses')->relationships(function ($relations) {
    $relations->hasMany('supermarkets');
  });


  $api->resource('supermarkets')->relationships(function ($relations) {
    $relations->hasOne('address');
    $relations->hasMany('advertisements');
  });

  $api->resource('advertisements')->relationships(function ($relations) {
    $relations->hasOne('supermarket');
    $relations->hasMany('items');
  });

  $api->resource('items')->relationships(function ($relations) {
    $relations->hasOne('image');
    $relations->hasOne('advertisements');
  });
});
