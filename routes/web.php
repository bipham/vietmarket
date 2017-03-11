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


Route::get('login', ['as'=>'login', 'uses'=>'Auth\LoginController@getLogin']);
Route::post('login', ['as'=>'authLogin', 'uses'=>'Auth\LoginController@authLogin']);

Route::get('register', ['as'=>'register', 'uses'=>'Auth\RegisterController@getRegister']);
Route::post('register', ['as'=>'authRegister', 'uses'=>'Auth\RegisterController@authRegister']);

Route::get('HomePage', ['as'=>'Home', 'uses'=>'Client\HomeController@showHome']);

Route::get('MyStore', ['as'=>'MyStore', 'uses'=>'Client\HomeController@showMyStore']);

Route::get('ListOrder', ['as'=>'OrderDetail', 'uses'=>'Client\HomeController@showOrderDetail']);

Route::get('uploadProducts', ['as'=>'uploadProducts', 'uses'=>'Client\HomeController@upload']);


/*****************
Truong Trieu Hai
23/02/2017
*****************/
Route::get('account', function() {
	return view('account.pages.login');
});

Route::get('profile', function() {
	return view('haiblade.pages.profile');
});

Route::get('upload', function() {
	return view('haiblade.pages.upload');
});

Route::get('map', function() {
	return view('haiblade.pages.map');
});
