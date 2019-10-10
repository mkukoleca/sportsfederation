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

//PlayerInfo
Route::get('/playersInfo/players', 'PlayerInfoController@index');
Route::get('/playersInfo/singlePlayer/{id}', 'PlayerInfoController@show');
Route::get('/playersInfo/updatePlayer/{id}','PlayerInfoController@edit');
Route::post('/playersInfo/updatePlayer/{id}','PlayerInfoController@update')->name('updateplayer');
Route::get('/playersInfo/registerPlayer', 'PlayerInfoController@create');
Route::post('/playersInfo/registerPlayer', 'PlayerInfoController@store')->name('registerplayer');


Route::get('/deletePlayer/{id}','PlayerInfoController@destroy');


Route::get('/singlePlayer/{cccc}','PlayerInfoController@nekafunkcija');
Route::get('/getplayer/{cccc}','PlayerInfoController@nekafunkcija');




//Game
Route::get('/games/gamesList', 'GameController@index');
Route::get('/games/registerGame', 'GameController@create');
Route::post('/games/registerGame', 'GameController@store')->name('register');
Route::get('/games/singleGame/{id}', 'GameController@show');
Route::get('/games/updateGame/{id}', 'GameController@edit');
Route::get('/deleteGame/{id}','GameController@destroy');

