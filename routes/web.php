<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/crear', 'ViajerosController@crear');
Route::post('/storeviajero', 'ViajerosController@storeviajero');
Route::get('/crearviajes', 'ViajesController@crearviajes');
Route::post('/storeviajes', 'ViajesController@storeviajes');
Route::get('/crearorigen', 'OrigenController@crearorigen');
Route::get('/creardestino', 'DestinoController@creardestino');
Route::post('/storeorigen', 'OrigenController@storeorigen');
Route::post('/storedestino', 'DestinoController@storedestino');
Route::get('/getviajeros', 'ViajerosController@getviajeros');
Route::get('/getviajes', 'ViajesController@getviajes');
Route::get('/getdestinos', 'DestinoController@getdestinos');
Route::get('/getorigenes', 'OrigenController@getorigenes');
Route::get('/delete', 'HomeController@delete');