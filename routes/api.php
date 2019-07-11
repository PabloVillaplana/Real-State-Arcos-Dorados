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


Route::group([
    'prefix'     => 'internals',
], function () { // custom admin routes

    Route::get('provincia', 'Api\Internals\ProvinciaController@index');
    Route::get('provincia/{id}', 'Api\Internals\ProvinciaController@show');

    Route::get('canton', 'Api\Internals\CantonController@index');
    Route::get('canton/{id}', 'Api\Internals\CantonController@show');

    Route::get('distrito', 'Api\Internals\DistritoController@index');
    Route::get('distrito/{id}', 'Api\Internals\DistritoController@show');


});