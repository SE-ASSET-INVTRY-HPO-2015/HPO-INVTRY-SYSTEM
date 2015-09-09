<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	//Guest User
Route::group(['middleware' => 'guest'], function(){
	get('/', 'Auth\AuthController@getLogin');
	post('/', 'Auth\AuthController@postLogin');
	get('auth/register', 'Auth\AuthController@getRegister');
	post('auth/register', 'Auth\AuthController@postRegister');
});

	//Authenticated User
Route::group(['middleware' => 'auth'], function(){
	get('dashboard', 'DashboardController@index');
	get('show/{id}', 'DashboardController@show');
	get('editUsername/{id}', 'DashboardController@editUsername');
	post('updateUsername/{id}', 'DashboardController@updateUsername');
	get('editPassword/{id}', 'DashboardController@editPassword');
	post('updatePassword/{id}', 'DashboardController@updatePassword');
	get('auth/logout', 'Auth\AuthController@getLogout');
	Route::group(['middleware' => 'admin'], function(){
		get('/create', 'AssetController@index');
	});
});