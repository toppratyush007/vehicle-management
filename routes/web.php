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

Route::get('/{deviceId}','MainController@showIndex');
Route::get('/register-vehicle','MainController@registerVehicle');
Route::post('/register-vehicle','MainController@saveVehicleDetails');
Route::get('/devices','MainController@seeDevicesList');
Route::get('/triggerData/{deviceId}','MainController@showLiveData');

// todo :: remove below route
Route::get('dummy/{deviceId}','MainController@dummyData');
