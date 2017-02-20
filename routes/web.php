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

Route::get('HomePage', ['as'=>'Home', 'uses'=>'HomeController@showHome']);

/*Route::get('/', function(){
	return redirect()->route('Home');
});*/

Route::get('MyStore', ['as'=>'MyStore', 'uses'=>'HomeController@showMyStore']);

Route::get('ListOrder', ['as'=>'OrderDetail', 'uses'=>'HomeController@showOrderDetail']);