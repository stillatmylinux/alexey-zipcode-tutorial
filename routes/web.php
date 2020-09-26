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

Route::get('/', function () {
    return view('welcome');
});

// Deliveries
Route::get('delivery', 'Deliveries\DeliveryController@index');

// Zipcodes
Route::get('zipcodes', 'Zipcodes\ZipcodeController@index')->name('zipcodes');
Route::get('zipcodes/new', 'Zipcodes\ZipcodeController@new')->name('zipcodes.new');
Route::post('zipcodes/new', 'Zipcodes\ZipcodeController@create');