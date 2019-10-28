<?php

namespace App\Http\Controllers;

use App\PlayerInfo;
use Illuminate\Http\Request;
use App\Selection;
use App\Club;
use Intervention\Image\ImageManagerStatic as Image;


class PlayerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $player = PlayerInfo::with(['club']);
       if (request()->has('club')) {
        $player->where('clubId', request('club'));
        
    }
    return view('/playersinfo.players', ['player_infos'=> $player->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/playersinfo.registerPlayer', ['selection'=> Selection::all(), 'clubs' => Club::all()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['thumbnail', 'name', 'description', 'position', 'height', 'weight', 'jerseyNumber', 'dateOfBirth', 'citizenship', 'playerHistory', 'clubId', 'selectionId' ]);
        //dd($data);
        if(count($data) > 0){
            $player = new PlayerInfo();
          
            $player->name=$data['name'];
            $player->description=$data['description'];
            $player->position=$data['position'];
            $player->height=$data['height'];
            $player->weight=$data['weight'];
            $player->jerseyNumber=$data['jerseyNumber'];
            $player->dateOfBirth=$data['dateOfBirth'];
            $player->citizenship=$data['citizenship'];
            $player->playerHistory=$data['playerHistory'];
            $player->clubId=$data['clubId'];
            $player->selectionId=$data['selectionId'];

            if($request->hasFile('thumbnail')){
                $thumbnail      = $request->file('thumbnail');
                //$filename    = $thumbnail->getClientOriginalName();
                $filename = $player->name.time().'.'.$request->thumbnail->extension();
                $image_resize = Image::make($thumbnail->getRealPath());              
                $image_resize->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                }); 
                 $image_resize->save(public_path('assets/photo/' .$filename));
                 $folder = 'assets/photo/';
                 
                 $player->thumbnail=$folder.$filename;

              /*  $name = $player->name.time().'.'.$request->thumbnail->extension();
                $folder = 'assets/photo/';
                $request->thumbnail->move(public_path($folder), $name);

                $player->thumbnail=$folder.$name;*/
            }

            $player->save();
            return redirect('/players');        
        } 
        return view('/playersinfo.registerPlayer');

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
        $player = PlayerInfo::where('id', $id)->first();
        
        if(request()->hasFile('thumbnail')){
            $name = $player->name.time().'.'.$request->thumbnail->extension();
            $folder = 'assets/photo/';
            $request->thumbnail->move(public_path($folder), $name);

            $player->thumbnail=$folder.$name;
        }

        return view("/playersinfo.singlePlayer", ['player' => $player]);

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
        $clubs= Club::all();
        $selection = Selection::all();
        return view('/playersinfo.updatePlayer',compact(['player', 'clubs', 'selection']));
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
        $data = $request->only(['thumbnail', 'name', 'description', 'position', 'height', 'weight', 'jerseyNumber', 'dateOfBirth', 'citizenship', 'playerHistory', 'clubId', 'selectionId', 'created_at', 'updated_at',]);
        
        //dd($data);
        $player=PlayerInfo::where('id', $id)->first();
        $player->thumbnail=$data['thumbnail'];
        $player->name=$data['name'];
        $player->description=$data['description'];
        $player->position=$data['position'];
        $player->height=$data['height'];
        $player->weight=$data['weight'];
        $player->jerseyNumber=$data['jerseyNumber'];
        $player->dateOfBirth=$data['dateOfBirth'];
        $player->citizenship=$data['citizenship'];
        $player->playerHistory=$data['playerHistory'];
        $player->clubId=$data['clubId'];
        $player->selectionId=$data['selectionId'];
        
        if($request->hasFile('thumbnail')){
            
            
            $thumbnail      = $request->file('thumbnail');
            //$filename    = $thumbnail->getClientOriginalName();
            $filename = $player->name.time().'.'.$request->thumbnail->extension();
            $image_resize = Image::make($thumbnail->getRealPath());              
            $image_resize->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            }); 
             $image_resize->save(public_path('assets/photo/' .$filename));
             $folder = 'assets/photo/';
             
             $player->thumbnail=$folder.$filename;
            }
            /*$name = $player->name.time().'.'.$request->thumbnail->extension();
            $folder = 'assets/photo/';
            $request->thumbnail->move(public_path($folder), $name);

            $player->thumbnail=$folder.$name;*/
        

        $player->save();
        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerInfo  $playerInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $player = PlayerInfo::where('id', $id)->first();
        $player->delete();
        
        
        return redirect('/players');
    }


}
