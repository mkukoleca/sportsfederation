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
Route::get('/clubs','ClubController@index');
Route::get('/newClub', 'ClubController@store');
Route::post('/newClub', 'ClubController@store')->name('createclub');
Route::get('/editClub/{id}','ClubController@edit');
Route::post('/editClub/{id}','ClubController@update')->name('updateclub');
Route::get('/deleteClub/{id}','ClubController@destroy');
Route::post('/deleteClub/{id}','ClubController@clear')->name('clearclub');
Route::get('/selection', 'SelectionController@index');

Route::get('/federation', 'FederationController@index');
Route::get('/staffs','StaffController@index');
Route::get('/newStaff','StaffController@store');
Route::post('/newStaff', 'StaffController@store')->name('create');

//staff federation route
Route::get('/federation/staffs', 'StaffController@index');
Route::get('/federation/newStaff', 'StaffController@store');
Route::post('/federation/newStaff', 'StaffController@store')->name('create');

//staff edit and delete
Route::get('/editStaff/{id}', 'StaffController@edit');
Route::post('/editStaff/{id}', 'StaffController@update');

Route::get('/deleteStaff/{id}', 'StaffController@delete');