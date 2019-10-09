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
Route::get('/index','IndexController@index' );
Route::get('/newClub', 'ClubController@store' );
Route::post('/newClub', 'ClubController@store')->name('create');
Route::get('/editClub/{id}','ClubController@edit');
Route::post('/editClub/{id}','ClubController@update')->name('updateclub');
Route::get('/deleteClub/{id}','ClubController@destroy');
Route::post('/deleteClub/{id}','ClubController@clear')->name('clearclub');

Route::get('/selection','SelectionController@show' );
Route::get('/newSelection', 'SelectionController@store');
Route::post('/newSelection','SelectionController@store')->name('createSelection');
Route::get('editSelection/{id}','SelectionController@edit');
Route::post('editSelection/{id}','SelectionController@update')->name('updateselection');
Route::get('/deleteSelection/{id}','SelectionController@destroy');












