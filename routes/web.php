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

Route::get('/area', 'AreaController@index');

Route::post('/area', 'AreaController@store');

Route::get('/contratista', 'ContratistaController@index');

Route::post('/contratista', 'ContratistaController@store');

Route::get('/actividad', 'ActividadController@index');

Route::post('/actividad', 'ActividadController@store');

Route::get('/area', 'AreaController@getAreas');