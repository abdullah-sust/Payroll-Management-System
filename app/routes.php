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

	Route::get('profile/account', ['as'=>'user.account', 'uses'=>'UserController@account']);
	Route::get('edit-profile',['as'=>'user.edit', 'uses'=>'UserController@edit']);
	Route::post('update-profile',['as'=>'user.update', 'uses'=>'UserController@update']);
	Route::get('upload-avatar',['as'=>'upload.avatar', 'uses'=>'UserController@uploadAvatarForm']);
	Route::post('upload-avatar',['as'=>'upload.avatar', 'uses'=>'UserController@uploadAvatar']);

	Route::get('profile', ['as' => 'user.profile', 'uses' => 'AuthController@show']);

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

	// Designation CRUD

	Route::get('designation',['as' => 'designation.index', 'uses' => 'DesignationController@index']);
	Route::get('designation/create',['as' => 'designation.create', 'uses' => 'DesignationController@create']);
	Route::post('designation',['as' => 'designation.store', 'uses' => 'DesignationController@store']);
	Route::get('designation/{id}/edit',['as' => 'designation.edit', 'uses' => 'DesignationController@edit']);
	Route::get('designation/{id}/show',['as' => 'designation.show', 'uses' => 'DesignationController@show']);
	Route::put('designation/{id}',['as' => 'designation.update', 'uses' => 'DesignationController@update']);
	Route::delete('designation/{id}',['as' => 'designation.delete', 'uses' => 'DesignationController@destroy']);

	// Salary & Rank CRUD

	Route::get('salary',['as' => 'salary.index', 'uses' => 'SalaryController@index']);
	Route::get('salary/create',['as' => 'salary.create', 'uses' => 'SalaryController@create']);
	Route::post('salary',['as' => 'salary.store', 'uses' => 'SalaryController@store']);
	Route::get('salary/{id}/edit',['as' => 'salary.edit', 'uses' => 'SalaryController@edit']);
	Route::get('salary/{id}/show',['as' => 'salary.show', 'uses' => 'SalaryController@show']);
	Route::put('salary/{id}',['as' => 'salary.update', 'uses' => 'SalaryController@update']);
	Route::delete('salary/{id}',['as' => 'salary.delete', 'uses' => 'SalaryController@destroy']);

	// Employee Company info CRUD

	Route::get('companyinfo',['as' => 'companyinfo.index', 'uses' => 'CompanyController@index']);
	Route::get('companyinfo/create',['as' => 'companyinfo.create', 'uses' => 'CompanyController@create']);
	Route::post('companyinfo',['as' => 'companyinfo.store', 'uses' => 'CompanyController@store']);
	Route::get('companyinfo/{id}/edit',['as' => 'companyinfo.edit', 'uses' => 'CompanyController@edit']);
	Route::get('companyinfo/{id}/show',['as' => 'companyinfo.show', 'uses' => 'CompanyController@show']);
	Route::put('companyinfo/{id}',['as' => 'companyinfo.update', 'uses' => 'CompanyController@update']);
	Route::delete('companyinfo/{id}',['as' => 'companyinfo.delete', 'uses' => 'CompanyController@destroy']);
    
    // Reward & Fine CRUD

	Route::get('reward',['as' => 'reward.index', 'uses' => 'RewardController@index']);
	Route::get('reward/create',['as' => 'reward.create', 'uses' => 'RewardController@create']);
	Route::post('reward',['as' => 'reward.store', 'uses' => 'RewardController@store']);
	Route::get('reward/{id}/edit',['as' => 'reward.edit', 'uses' => 'RewardController@edit']);
	Route::get('reward/{id}/show',['as' => 'reward.show', 'uses' => 'RewardController@show']);
	Route::put('reward/{id}',['as' => 'reward.update', 'uses' => 'RewardController@update']);
	Route::delete('reward/{id}',['as' => 'reward.delete', 'uses' => 'RewardController@destroy']);


	Route::get('salarycalculation',['as' => 'calculation.index', 'uses' => 'SalaryCalculationController@index']);
	Route::get('salarycalculation/create',['as' => 'calculation.create', 'uses' => 'SalaryCalculationController@create']);
	Route::post('salarycalculation',['as' => 'calculation.store', 'uses' => 'SalaryCalculationController@store']);
	Route::get('salarycalculation/{id}/edit',['as' => 'calculation.edit', 'uses' => 'SalaryCalculationController@edit']);
	Route::put('salarycalculation/{id}',['as' => 'calculation.update', 'uses' => 'SalaryCalculationController@update']);
	Route::delete('salarycalculation/{id}',['as' => 'calculation.delete', 'uses' => 'SalaryCalculationController@destroy']);
	Route::get('salarycalculation/{id}',['as' => 'calculation.search', 'uses' => 'SalaryCalculationController@search']);


	Route::post('status/show', ['as' => 'status.show', 'uses' => 'SalaryCalculationController@showStatus']);
	Route::get('salarycalculation/show',['as' => 'calculation.show', 'uses' => 'SalaryCalculationController@show']);

	Route::get('history',['as' => 'history.index', 'uses' => 'HistoryController@index']);
	Route::get('history/add',['as' => 'history.create', 'uses' => 'HistoryController@create']);

	Route::get('employee/show/{id}', ['as' => 'status.full.show', 'uses' => 'SalaryCalculationController@showStatusFull']);
	Route::get('employee/search/show/{id}',['as' => 'search.employee.show', 'uses' => 'EmployeeController@search']);

});