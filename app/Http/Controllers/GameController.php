<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Club;
use App\Staff;
use App\Event;
use App\StaffType;


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/games/games', ['games' => Game::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/games/registerGame', 
                    ['clubs' => Club::all(), 
                     'events' => Event::all(), 
                     'referee'=>Staff::byType(StaffType::REFEREE),
                     'delegate'=>Staff::byType(StaffType::DELEGATE)]);
                     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['eventId', 'date', 'time', 'place', 'homeClubId', 'guestClubId','category', 'referee1Id', 'referee2Id', 'delegateId', 'round', 'scoresHome', 'scoresGuest', 'note']);
        if (count($data) > 0) {
            $game = new Game();
            $game->eventId = $data['eventId'];
            $game->dateTime = "{$data['date']} {$data['time']}";
            $game->place = $data['place'];
            $game->homeClubId = $data['homeClubId'];
            $game->guestClubId = $data['guestClubId'];
            $game->category = $data['category'];
            $game->referee1Id = $data['referee1Id'];
            $game->referee2Id = $data['referee2Id'];
            $game->delegateId = $data['delegateId'];
            $game->round = $data['round'];
            $game->note = $data['note'];



            $game->save();
            return redirect('/games');
        }
        return view('/games/registerGame');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $game = Game::where('id', $id)->first();
        return view("games/singleGame", ['game' => $game]);
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
        return view("games/updateGame", 
                    ['game'=>$game, 
                     'clubs'=>Club::all(), 
                     'events'=>Event::all(), 
                     'referee'=>Staff::byType(StaffType::REFEREE),
                     'delegate'=>Staff::byType(StaffType::DELEGATE)]);

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
        $data = $request->only(['eventId', 'dateTime', 'place', 'homeClubId', 'guestClubId','category', 'referee1Id', 'referee2Id', 'delegateId', 'round', 'scoresHome', 'scoresGuest', 'note']);
        $game = Game::where('id', $id)->first();
        $game->eventId = $data['eventId'];
        $game->dateTime = $data['dateTime'];
        $game->place = $data['place'];
        $game->homeClubId = $data['homeClubId'];
        $game->guestClubId = $data['guestClubId'];
        $game->category = $data['category'];
        $game->referee1Id = $data['referee1Id'];
        $game->referee2Id = $data['referee2Id'];
        $game->delegateId = $data['delegateId'];
        $game->round = $data['round'];
        $game->scoresHome = $data['scoresHome'];
        $game->scoresGuest = $data['scoresGuest'];
        $game->note = $data['note'];



        $game->save();
        return redirect('/games');
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

        return redirect('games');
    }
}
