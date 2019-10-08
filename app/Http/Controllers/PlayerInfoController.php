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
    public function show(PlayerInfo $playerInfo)
    {
        return view('/playersinfo/singlePlayer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlayerInfo  $playerInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerInfo $playerInfo)
    {
        //
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

        $playerInfo=PlayerInfo::where('id', $id)->first();
        $playerInfo->thumbnail=$data['thumbnail'];
        $playerInfo->name=$data['name'];
        $playerInfo->surname=$data['surname'];
        $playerInfo->description=$data['description'];
        $playerInfo->position=$data['position'];
        $playerInfo->height=$data['height'];
        $playerInfo->weight=$data['weight'];
        $playerInfo->jerseyNumber=$data['jerseyNumber'];
        $playerInfo->dateOfBirth=$data['dateOfBirth'];
        $playerInfo->citizenship=$data['citizenship'];
        $playerInfo->clubHistoy=$data['clubHistoy'];
        $playerInfo->currentClub=$data['currentClub'];
        $playerInfo->selection=$data['selection'];
        $playerInfo->created_at=$data['created_at'];
        $playerInfo->updated_at=$data['updated_at'];

        $playerInfo->save();
    
        return redirect('/playersInfo/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerInfo  $playerInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerInfo $playerInfo)
    {
        //
    }
}
