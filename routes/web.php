<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'VehicleController@index');

Route::get('/vehicle/create', 'VehicleController@create');
Route::post('/vehicle', 'VehicleController@store');
Route::get('/vehicle/{id}/edit', 'VehicleController@edit');
Route::post('/vehicle/{id}/edit', 'VehicleController@update');
Route::get('/vehicle/{id}/delete', 'VehicleController@destroy');

Route::get('/driver', 'DriverController@index');
Route::get('/driver/create', 'DriverController@create');
Route::post('/driver', 'DriverController@store');
Route::get('/driver/{id}/edit', 'DriverController@edit');
Route::post('/driver/{id}/edit', 'DriverController@update');
Route::get('/driver/{id}/delete', 'DriverController@destroy');

Route::get('/owner', 'OwnerController@index');
Route::get('/owner/create', 'OwnerController@create');
Route::post('/owner', 'OwnerController@store');
Route::get('/owner/{id}/edit', 'OwnerController@edit');
Route::post('/owner/{id}/edit', 'OwnerController@update');
Route::get('/owner/{id}/delete', 'OwnerController@destroy');

Route::get('/report', 'ReportController@index');