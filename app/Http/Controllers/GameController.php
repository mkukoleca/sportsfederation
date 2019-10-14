<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Club;
use App\Staff;
use App\Event;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/games/gamesList', ['games'=> Game::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/games/registerGame',['clubs'=>Club::all()],['events'=>Event::all()], ['staffs'=>Staff::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([ 'event', 'date', 'place', 'home', 'guest', 'referee1', 'referee2', 'delegate', 'round', 'scoresHome', 'scoresGuest', 'note' ]);
        if(count($data) > 0){
            $game = new Game();
            $game->event=$data['event'];
            $game->date=$data['date'];
            $game->place=$data['place'];
            $game->home=$data['home'];
            $game->guest=$data['guest'];
            $game->referee1=$data['referee1'];
            $game->referee2=$data['referee2'];
            $game->delegate=$data['delegate'];
            $game->round=$data['round'];
            $game->scoresHome=$data['scoresHome'];
            $game->scoresGuest=$data['scoresGuest'];
            $game->note=$data['note'];
            
            
        
            $game->save();
            return redirect('/games/gamesList');        
            } 
    //return view('/playersInfo/registerPlayer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Game::find($id);
        $game = Game::where('id', $id)->first();
       
        return view("/games/singleGame", compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::where('id', $id)->first();
        return view("games/updateGame", compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only([ 'event', 'date', 'place', 'home', 'guest', 'referee1', 'referee2', 'delegate', 'round', 'scoresHome', 'scoresGuest', 'note' ]);
        
        $game = Game::where('id', $id)->first();
        $game->event=$data['event'];
        $game->date=$data['date'];
        $game->place=$data['place'];
        $game->home=$data['home'];
        $game->guest=$data['guest'];
        $game->referee1=$data['referee1'];
        $game->referee2=$data['referee2'];
        $game->delegate=$data['delegate'];
        $game->round=$data['round'];
        $game->scoresHome=$data['scoresHome'];
        $game->scoresGuest=$data['scoresGuest'];
        $game->note=$data['note'];
        
        
    
        $game->save();
        return redirect('/games/gamesList');        
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $game = Game::find($id)->delete();
          
            return redirect('games/gamesList');
    }
}
