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

Route::get('/addtimesheet','TimesheetController@AddTimesheet')->name('add');
Route::post('/AddTimesheet','TimesheetController@post_AddTimesheet')->name('timesheet.post');

Route::get('/view','TimesheetController@view') ->name('view');
Route::get('/edit/{id}','TimesheetController@edit') ->name('edit');
Route::post('/edit/{id}','TimesheetController@postedit') ->name('postedit') ;


