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

Route::get('/','carsController@index');
Route::get('/cars/{car}','carsController@show');
Route::get('/car/create','carsController@create');
Route::POST('/car/create','carsController@store');
Route::GET('/photo-upload','carsController@photoUpload');
Route::POST('/photo-upload','carsController@savePhoto');
