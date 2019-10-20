<?php

// Federation
Route::get('/', 'FederationController@index');
Route::get('/federation/{id}', 'FederationController@edit');
Route::post('/federationEdit/{id}', 'FederationController@update');

// Club
Route::get('/clubs','ClubController@index');
Route::get('/newClub', 'ClubController@store');
Route::post('/newClub', 'ClubController@store')->name('createclub');
Route::get('/editClub/{id}','ClubController@edit');
Route::post('/editClub/{id}','ClubController@update')->name('updateclub');
Route::get('/deleteClub/{id}','ClubController@destroy');

// PlayerInfo
Route::get('/players', 'PlayerInfoController@index');
Route::get('/playersInfo/singlePlayer/{id}', 'PlayerInfoController@show');
Route::get('/playersInfo/updatePlayer/{id}','PlayerInfoController@edit');
Route::post('/playersInfo/updatePlayer/{id}','PlayerInfoController@update')->name('updateplayer');
Route::get('/playersInfo/registerPlayer', 'PlayerInfoController@create');
Route::post('/playersInfo/registerPlayer', 'PlayerInfoController@store')->name('registerplayer');
Route::get('/deletePlayer/{id}','PlayerInfoController@destroy');

// Staff federation route
Route::any('/staff', 'StaffController@index');
Route::get('/newStaff','StaffController@store');
Route::post('/newStaff', 'StaffController@store')->name('create');

// Staff edit and delete
Route::get('/editStaff/{id}', 'StaffController@edit');
Route::post('/editStaff/{id}', 'StaffController@update');
Route::get('/deleteStaff/{id}', 'StaffController@destroy');

// Game
Route::get('/games', 'GameController@index');
Route::get('/games/registerGame', 'GameController@create');
Route::post('/games/registerGame', 'GameController@store')->name('register');
Route::get('/games/singleGame/{id}', 'GameController@show');
Route::get('/games/updateGame/{id}', 'GameController@edit');
Route::post('/games/updateGame/{id}', 'GameController@update')->name('updategame');
Route::get('/deleteGame/{id}','GameController@destroy');

// Selection
Route::get('/selection','SelectionController@index' );
Route::get('/newSelection', 'SelectionController@store');
Route::post('/newSelection','SelectionController@store')->name('createSelection');
Route::get('/editSelection/{selection}','SelectionController@edit');
Route::post('/editSelection/{id}','SelectionController@update')->name('updateselection');
Route::get('/deleteSelection/{id}','SelectionController@destroy');

// Event
Route::get('/event','EventController@index');
Route::get('/newEvent', 'EventController@store');
Route::post('/newEvent','EventController@store')->name('createEvent');
Route::get('/editEvent/{event}','EventController@edit');
Route::post('/editEvent/{id}','EventController@update')->name('updateevent');
Route::get('/deleteEvent/{id}','EventController@destroy');

//filters
Route::get('/filter', function () {
    $clubs=App\Club::get();

    return view('filter')->with('clubs',$clubs);

    if(request()->has('website')){
        $clubs=App\Club::where('website',request('website'))->paginate(1);
    } else {
         $clubs =App\Club::paginate(1);
    }
   
});