<?php

// Federation
Route::get('/', 'FederationController@index');
Route::get('/federation/{id}', 'FederationController@edit')->middleware('auth');
Route::post('/federationEdit/{id}', 'FederationController@update');

// Club
Route::get('/clubs','ClubController@index')->middleware('auth');
Route::get('/newClub', 'ClubController@store');
Route::post('/newClub', 'ClubController@store')->name('createclub');
Route::get('/editClub/{id}','ClubController@edit');
Route::post('/editClub/{id}','ClubController@update')->name('updateclub');
Route::get('/deleteClub/{id}','ClubController@destroy');

// PlayerInfo
Route::get('/players', 'PlayerInfoController@index')->middleware('auth');
Route::get('/singlePlayer/{id}', 'PlayerInfoController@show');
Route::get('/updatePlayer/{id}','PlayerInfoController@edit');
Route::post('updatePlayer/{id}','PlayerInfoController@update')->name('updateplayer');
Route::get('/registerPlayer', 'PlayerInfoController@create');
Route::post('/registerPlayer', 'PlayerInfoController@store')->name('registerplayer');
Route::get('/deletePlayer/{id}','PlayerInfoController@destroy');

// Staff federation route
Route::any('/staff', 'StaffController@index')->middleware('auth');
Route::get('/newStaff','StaffController@store');
Route::post('/newStaff', 'StaffController@store')->name('create');

// Staff edit and delete
Route::get('/editStaff/{id}', 'StaffController@edit')->middleware('auth');
Route::post('/editStaff/{id}', 'StaffController@update');
Route::get('/deleteStaff/{id}', 'StaffController@destroy');

// Game
Route::get('/games', 'GameController@index')->middleware('auth');
Route::get('/games/registerGame', 'GameController@create');
Route::post('/games/registerGame', 'GameController@store')->name('registerGame');
Route::get('/games/singleGame/{id}', 'GameController@show');
Route::get('/games/updateGame/{id}', 'GameController@edit');
Route::post('/games/updateGame/{id}', 'GameController@update')->name('updategame');
Route::get('/deleteGame/{id}','GameController@destroy');

// Selection
Route::get('/selection','SelectionController@index')->middleware('auth');
Route::get('/newSelection', 'SelectionController@store');
Route::post('/newSelection','SelectionController@store')->name('createSelection');
Route::get('/editSelection/{selection}','SelectionController@edit');
Route::post('/editSelection/{id}','SelectionController@update')->name('updateselection');
Route::get('/deleteSelection/{id}','SelectionController@destroy');

// Event
Route::get('/event','EventController@index')->middleware('auth');
Route::get('/newEvent', 'EventController@store');
Route::post('/newEvent','EventController@store')->name('createEvent');
Route::get('/editEvent/{event}','EventController@edit');
Route::post('/editEvent/{id}','EventController@update')->name('updateevent');
Route::get('/deleteEvent/{id}','EventController@destroy');

//login
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
