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

Route::get('/timesheets', 'TimesheetController@index')->name('timesheets.index');
Route::get('/timesheets/{id}', 'TimesheetController@show')->where(['id' => '[0-9]+'])->name('timesheets.show');
Route::get('/timesheets/create', 'TimesheetController@create')->name('timesheets.create');
Route::post('/timesheets', 'TimesheetController@store')->name('timesheets.store');
Route::get('/timesheets/{id}/edit', 'TimesheetController@edit')->name('timesheets.edit');
Route::post('/timesheets/{id}/edit', 'TimesheetController@update')->name('timesheets.update');
Route::delete('/timesheets/{id}', 'TimesheetController@destroy')->where(['id' => '[0-9]+'])->name('timesheets.destroy');

Route::get('/users/signin', 'UserController@signin')->name('users.signin');
Route::post('/users/signin', 'UserController@signinpost')->name('users.signin.post');
Route::get('/users/signup', 'UserController@create')->name('users.create');
Route::post('/users/signup', 'UserController@store')->name('users.store');
Route::get('logout', 'UserController@Logout')->name('users.logout');
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/{email}', 'UserController@show')->name('users.show');
