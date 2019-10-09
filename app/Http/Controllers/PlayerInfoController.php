<?php

namespace App\Http\Controllers;

use App\PlayerInfo;
use Illuminate\Http\Request;

class PlayerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('/playersInfo/players', ['player_infos'=> PlayerInfo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlayerInfo  $playerInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return PlayerInfo::find($id);
        $player = PlayerInfo::where('id', $id)
        ->first();
        return view("/playersInfo/singlePlayer", compact('player'));

        //return view('/playersinfo/singlePlayer'); je kontrolni cisto da vidim da li radi ruta

        //return view('/playersinfo/singlePlayer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlayerInfo  $playerInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = PlayerInfo::where('id', $id)->first();
        return view('/playersinfo/updatePlayer',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlayerInfo  $playerInfo
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['thumbnail', 'name', 'surname', 'description', 'position', 'height', 'weight', 'jerseyNumber', 'dateOfBirth', 'citizenship', 'clubHistory', 'currentClub', 'selection', 'created_at', 'updated_at',]);

        $player=PlayerInfo::where('id', $id)->first();
        $player->thumbnail=$data['thumbnail'];
        $player->name=$data['name'];
        $player->surname=$data['surname'];
        $player->description=$data['description'];
        $player->position=$data['position'];
        $player->height=$data['height'];
        $player->weight=$data['weight'];
        $player->jerseyNumber=$data['jerseyNumber'];
        $player->dateOfBirth=$data['dateOfBirth'];
        $player->citizenship=$data['citizenship'];
        $player->clubHistory=$data['clubHistory'];
        $player->currentClub=$data['currentClub'];
        $player->selection=$data['selection'];
        //$player->created_at=$data['created_at'];
        //$player->updated_at=$data['updated_at'];

        $player->save();
    
        return redirect('/playersInfo/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerInfo  $playerInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $PlayerInfo = PlayerInfo::where('id', $id)->first();
        return view('playersinfo/players',compact('playersinfo/players'));
    }
}
