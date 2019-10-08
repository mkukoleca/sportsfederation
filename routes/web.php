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
Route::get('/index','IndexController@index' );
Route::get('/newClub', 'ClubController@store' );
Route::post('/newClub', 'ClubController@store')->name('create');
Route::get('/editClub/{id}','ClubController@edit');
Route::post('/editClub/{id}','ClubController@update')->name('updateclub');
Route::get('/deleteClub/{id}','ClubController@destroy');
Route::post('/deleteClub/{id}','ClubController@clear')->name('clearclub');

Route::get('/playersInfo/players', 'PlayerInfoController@index');
<<<<<<< HEAD
Route::post('/playersinfo/players/{id}','PlayerInfoController@destroy');
=======
Route::get('/playersInfo/singlePlayer','PlayerInfoController@show');
Route::get('/playersInfo/singlePlayer/{id}','PlayerInfoController@edit');
Route::post('/playersInfo/singlePlayer/{id}','PlayerInfoController@update');
>>>>>>> a32a270c5919c124ead43ea5fe7c9d0e681b3380
