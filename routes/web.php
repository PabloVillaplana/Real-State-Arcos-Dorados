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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'admin\PropiedadCrudController@ver')->name('propiedad.home');

Route::get('/{propiedad}', 'admin\PropiedadCrudController@details')->name('propiedad.details');

