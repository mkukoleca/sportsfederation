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

//Club
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

//Selection
Route::get('/selection','SelectionController@index' );
Route::get('/newSelection', 'SelectionController@store');
Route::post('/newSelection','SelectionController@store')->name('createSelection');
Route::get('/editSelection/{selection}','SelectionController@edit');
Route::post('/editSelection/{id}','SelectionController@update')->name('updateselection');
Route::get('/deleteSelection/{id}','SelectionController@destroy');

//Event
Route::get('/event','EventController@index');
Route::get('/newEvent', 'EventController@store');
Route::post('/newEvent','EventController@store')->name('createEvent');
Route::get('/editEvent/{event}','EventController@edit');
Route::post('/editEvent/{id}','EventController@update')->name('updateevent');
Route::get('/deleteEvent/{id}','EventController@destroy');










//Game
Route::get('/gamesList', 'GameController@index');
Route::get('/games/registerGame', 'GameController@create');
Route::post('/games/registerGame', 'GameController@store')->name('register');
Route::get('/games/singleGame/{id}', 'GameController@show');
Route::get('/games/updateGame/{id}', 'GameController@edit');
Route::get('/deleteGame/{id}','GameController@destroy');

Route::post('/games/updateGame/{id}', 'GameController@update')->name('updategame');

