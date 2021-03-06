<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| @author :=> Vikash Kashyap <vikashkrkashyap@gmail.com>
| @Since  :=> 5 september 2017
*/


Route::get('/','MainController@homePage');
Route::get('live/{deviceId}','MainController@showIndex');
Route::get('/register-vehicle','MainController@registerVehicle');
Route::post('/register-vehicle','MainController@saveVehicleDetails');
Route::get('/devices','MainController@seeDevicesList');
Route::get('/triggerData/{deviceId}','MainController@showLiveData');
