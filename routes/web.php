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

Route::get('', 'Cus\HomeController@index');

Route::get('logout', 'Cus\HomeController@getLogout');


Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@authLogin');


Route::get('homepage', ['as'=>'Home', 'uses'=>'Client\HomeController@showHome']);

Route::get('mystore', ['as'=>'MyStore', 'uses'=>'Client\HomeController@showMyStore']);

Route::get('listorder', ['as'=>'OrderDetail', 'uses'=>'Client\HomeController@showOrderDetail']);

Route::get('profile', ['as'=>'Profile', 'uses'=>'Client\HomeController@showProfile']);

Route::get('upload', ['as'=>'Upload', 'uses'=>'Client\HomeController@showUpload']);

Route::get('map', ['as'=>'Map', 'uses'=>'Client\HomeController@showMap']);