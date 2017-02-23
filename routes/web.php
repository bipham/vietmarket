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


Route::get('HomePage', ['as'=>'Home', 'uses'=>'HomeController@showHome']);

Route::get('MyStore', ['as'=>'MyStore', 'uses'=>'HomeController@showMyStore']);

Route::get('ListOrder', ['as'=>'OrderDetail', 'uses'=>'HomeController@showOrderDetail']);


/*****************
Truong Trieu Hai
23/02/2017
*****************/
Route::get('account', function() {
	return view('account.pages.login');
});