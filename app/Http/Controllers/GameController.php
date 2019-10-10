<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

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
        return view('/games/registerGame');
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
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $game = Game::where('id', $id)->first();
            $game->delete();
            
            
            return redirect('games/gamesList');
    }
}
