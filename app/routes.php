<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function(){
	return Redirect::route('dashboard');
});

Route::group(['before' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'AuthController@login']);
	Route::post('login', array('uses' => 'AuthController@doLogin'));
});


Route::group(array('before' => 'auth'), function()
{	

	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));

	Route::get('profile', ['as'=>'user.profile', 'uses'=>'UserController@show']);
	Route::get('profile/account', ['as'=>'user.account', 'uses'=>'UserController@account']);
	Route::get('edit-profile',['as'=>'user.edit', 'uses'=>'UserController@edit']);
	Route::post('update-profile',['as'=>'user.update', 'uses'=>'UserController@update']);
	Route::get('upload-avatar',['as'=>'upload.avatar', 'uses'=>'UserController@uploadAvatarForm']);
	Route::post('upload-avatar',['as'=>'upload.avatar', 'uses'=>'UserController@uploadAvatar']);

});

Route::group(array('before' => 'auth|admin', 'prefix' => 'admin'), function()
{

	// Employee

	Route::get('employee',['as' => 'employee.index', 'uses' => 'EmployeeController@index']);
	Route::get('employee/create',['as' => 'employee.create', 'uses' => 'EmployeeController@create']);
	Route::post('employee',['as' => 'employee.store', 'uses' => 'EmployeeController@store']);
	Route::get('employee/{id}/edit',['as' => 'employee.edit', 'uses' => 'EmployeeController@edit']);
	Route::get('employee/{id}/show',['as' => 'employee.show', 'uses' => 'EmployeeController@show']);
	Route::put('employee/{id}',['as' => 'employee.update', 'uses' => 'EmployeeController@update']);
	Route::delete('employee/{id}',['as' => 'employee.delete', 'uses' => 'EmployeeController@destroy']);

			

});