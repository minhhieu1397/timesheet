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
	Route::get('/timesheets', 'TimesheetController@index')->name('timesheets.index');
	Route::get('/timesheets/create', 'TimesheetController@create')->name('timesheets.create');
	Route::get('/timesheets/{timesheet}', 'TimesheetController@show')->name('timesheets.show');
	Route::post('/timesheets', 'TimesheetController@store')->name('timesheets.store');
	Route::get('/timesheets/{timesheet}/edit', 'TimesheetController@edit')->name('timesheets.edit');
	Route::put('/timesheets/{timesheet}/edit', 'TimesheetController@update')->name('timesheets.update');
	Route::delete('/timesheets/{id}', 'TimesheetController@destroy')->name('timesheets.destroy');
});



Route::get('/', 'UserController@login')->name('users.login');
Route::post('/users/login', 'UserController@loginpost')->name('users.login.post');
Route::get('/users/register', 'UserController@create')->name('users.create');	
Route::post('/users/register', 'UserController@store')->name('users.store');
Route::get('logout', 'UserController@Logout')->name('users.logout');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/users', 'UserController@index')->name('users.index');
	Route::get('/users/{user}', 'UserController@show')->name('users.show');
});