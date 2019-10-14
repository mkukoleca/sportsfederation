<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class ClubController extends Controller
{
    public function index(){
        return view('club.clubs', ['clubs' => Club::all()]);
    }

    public function store(Request $request){
    $data = $request->only(['name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history']);
 
    
        if(count($data) > 0){
            $club = new Club();
            $club->name = $data['name'];
            $club->address = $data['address'];
            $club->email = $data['email'];
            $club->website = $data['website'];
            $club->dateOfFoundation = $data['dateOfFoundation'];
            $club->director = $data['director'];
            $club->history = $data['history'];
            $club->save();

            return redirect("/");        
            } 
     return view('/club.newClub');
}
    
    public function edit($id){
        $club = Club::where('id', $id)->first();
        return view('/club.editClub',compact('club'));
    } 


    public function update($id, Request $request){
        $data = $request->only(['name', 'address', 'email','website', 'dateOfFoundation', 'director', 'history']);

        $club=Club::where('id', $id)->first();
        $club->name=$data['name'];
        $club->address=$data['address'];
        $club->email = $data['email'];
        $club->website=$data['website'];
        $club->dateOfFoundation=$data['dateOfFoundation'];
        $club->director=$data['director'];
        $club->history=$data['history'];
        $club->save();
    
        return redirect('/');
    }

    public function destroy($id){
        $club = Club::where('id', $id)->first();
        return view('/club.DeleteClub',compact('club'));
    }
    
    public function clear($id){
        $club = Club::where('id', $id)->delete();
        return redirect('/');
    }


    /*
    public function getclub(club $club){
        return view('/editClub', compact('club'));


    }
    */
}
