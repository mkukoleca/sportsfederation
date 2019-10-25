<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class ClubController extends Controller
{
    
    public function index(Request $request)
    {

        if( count( $request->query() ) > 0 ){

            $filters = [];
            foreach ( $request->query() as $key => $value ) {

                if( strlen($value) )
                    array_push($filters, [$key, $value]);
            }
 
            if (count($filters))
                return view('/club.clubs', ['clubs' => Club::where($filters)->get(), 'allClubs' => Club::select("name", "address", "director")->get()]);
        }

        return view('/club.clubs', ['clubs' => Club::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail']);


        if (count($data) > 0) {
            $club = new Club();
            $club->name = $data['name'];
            $club->address = $data['address'];
            $club->email = $data['email'];
            $club->website = $data['website'];
            $club->dateOfFoundation = $data['dateOfFoundation'];
            $club->director = $data['director'];
            $club->history = $data['history'];

            if ($request->hasFile('thumbnail')) {
                $name = $club->name . '.' . $request->thumbnail->extension();
                $folder = 'assets/photo/';
                $request->thumbnail->move(public_path($folder), $name);

                $club->thumbnail = $folder . $name;
            }

            $club->save();

            return redirect("/clubs");
        }
        return view('/club.newClub');
    }


    public function edit($id)
    {
        $club = Club::where('id', $id)->first();
        return view('/club.editClub', compact('club'));
    }


    public function update($id, Request $request)
    {
        $data = $request->only(['name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail']);
       
        $club = Club::where('id', $id)->first();
        $club->name = $data['name'];
        $club->address = $data['address'];
        $club->email = $data['email'];
        $club->website = $data['website'];
        $club->dateOfFoundation = $data['dateOfFoundation'];
        $club->director = $data['director'];
        $club->history = $data['history'];

        if ($request->hasFile('thumbnail')) {
            $name = $club->name . '.' . $request->thumbnail->extension();
            $folder = 'assets/photo/';
            $request->thumbnail->move(public_path($folder), $name);

            $club->thumbnail = $folder . $name;
        }


        $club->save();

        return redirect('/clubs');
    }

    public function destroy($id, Request $request)
    {
        $club = Club::where('id', $id)->first();
        $club->delete();

        return redirect('/clubs');
    }
    
    /* public function getclub(club $club)
    {
        return view('/editClub', compact('club'));
    } */
}
