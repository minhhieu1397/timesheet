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

Route::group(['middleware' => 'auth'], function () {
	Route::get('/timesheets/search', 'TimesheetController@search')->name('timesheet.search');
	Route::get('/timesheets', 'TimesheetController@index')->name('timesheets.index');
	Route::get('/timesheets/create', 'TimesheetController@create')->name('timesheets.create');
	Route::get('/timesheets/{timesheet}', 'TimesheetController@show')->name('timesheets.show');
	Route::post('/timesheets', 'TimesheetController@store')->name('timesheets.store');
	Route::get('/timesheets/{timesheet}/edit', 'TimesheetController@edit')->name('timesheets.edit');
	Route::put('/timesheets/{timesheet}/edit', 'TimesheetController@update')->name('timesheets.update');
	Route::delete('/timesheets/{timesheet}', 'TimesheetController@destroy')->name('timesheets.destroy');
});

Route::get('/', 'UserController@login')->name('users.login');
Route::post('/users/login', 'UserController@postlogin')->name('users.login.post');
Route::get('/users/register', 'UserController@create')->name('users.create');	
Route::post('/users/register', 'UserController@store')->name('users.store');
Route::get('logout', 'UserController@logout')->name('users.logout');

Route::get('/forgot_password', 'ForgotPasswordController@forgot')->name('Users.forgot.password');
Route::post('/forgot_password', 'ForgotPasswordController@postForgot')->name('Users.post_forgot.password');
Route::get('/reset-password/{token}', 'ForgotPasswordController@resetPassword')->name('Users.forgot.reset');
Route::put('/reset-password/{token}', 'ForgotPasswordController@putResetPassword')->name('Users.putforgot.reset');


Route::group(['middleware' => 'auth'], function () {
	Route::get('/users/account', 'UserController@account')->name('users.account');
	Route::put('/users/account', 'UserController@update')->name('users.update');
	Route::get('/users', 'UserController@index')->name('users.index');
	Route::get('/users/search', 'UserController@search')->name('users.search');
	Route::get('/users/{user}', 'UserController@show')->name('users.show');
	Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
});