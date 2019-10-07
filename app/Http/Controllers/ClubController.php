<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class ClubController extends Controller
{
    
    public function store(Request $request){
    $data = $request->only(['name', 'address', 'website', 'dateOfFoundation', 'director', 'history']);
 
    
        if(count($data) > 0){
            $club = new Club();
            $club->name = $data['name'];
            $club->address = $data['address'];
            $club->website = $data['website'];
            $club->dateOfFoundation = $data['dateOfFoundation'];
            $club->director = $data['director'];
            $club->history = $data['history'];
            $club->save();

            return redirect("/index");        
            } 
     return view('/newClub');
}
    
    public function edit($id){
        $club = Club::where('id', $id)->first();
        return view('/editClub',compact('club'));
    }


    public function update($id, Request $request){
        $data = $request->only(['name', 'address', 'website', 'dateOfFoundation', 'director', 'history']);

        $club=Club::where('id', $id)->first();
        $club->name=$data['name'];
        $club->address=$data['address'];
        $club->website=$data['website'];
        $club->dateOfFoundation=$data['dateOfFoundation'];
        $club->director=$data['director'];
        $club->history=$data['history'];
        $club->save();
    
        return redirect('/index');
    }

 

    public function destroy($id){
        $club = Club::where('id', $id)->first();
        return view('DeleteClub',compact('club'));
    
    }
    
    public function clear($id){
        $club = Club::where('id', $id)->delete();
        return redirect('/index');
    }
}
