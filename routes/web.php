<?php

Route::get('/','MainController@homePage');
Route::get('live/{deviceId}','MainController@showIndex');
Route::get('/register-vehicle','MainController@registerVehicle');
Route::post('/register-vehicle','MainController@saveVehicleDetails');
Route::get('/devices','MainController@seeDevicesList');
Route::post('setData/{deviceId}','MainController@setPopulateData');