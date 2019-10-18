<?php

namespace App\Http\Controllers;

use App\Selection;
use Illuminate\Http\Request;
use DB;

class SelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selection = DB::table('selection')->get();
        return view('/selection/selection', ['selection' => $selection]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $data = $request->only(['gender', 'category', 'history', 'staffTypeId', 'clubId']);

            if(count($data) > 0){
                $selection = new Selection();
                $selection->gender = $data['gender'];
                $selection->category = $data['category'];
                $selection->history = $data['history'];
                $selection->staffTypeId = $data['staffTypeId'];
                $selection->clubId = $data['clubId'];
                $selection->save();

                return redirect("/selection");
            }
    return view('/selection/newSelection');

    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function edit(Selection $selection)
    {
        return view('/selection/editSelection', compact('selection'));
    }

    public function update($id, Request $request)
    {
        $data = $request->only(['gender', 'category', 'staffTypeId', 'history', 'clubId']);

        $selection = Selection::where('id', $id)->first();
        $selection->gender=$data['gender'];
        $selection->category=$data['category'];
        $selection->staffTypeId=$data['staffTypeId'];
        $selection->history=$data['history'];
        $selection->clubId=$data['clubId'];
        $selection->save();
    
        return redirect('/selection');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Selection  $selection
     * @return \Illuminate\Http\Response
     */

    public function destroy($id, Request $request){
        
        $selection = Selection::where('id', $id)->first();
        $selection->delete();
        return redirect('/selection');
    }
    

    


}


