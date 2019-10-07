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
        //
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
     * @param  \App\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $selection = DB::table('selection')->get();
        return view('selection', ['selection' => $selection]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selection = Club::where('id', $id)->first();
        return view('/editSelection',compact('slection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['gender', 'category', 'coachId', 'history', 'clubId']);

        
        $selection=Selection::where('id', $id)->first();
        $selection->name=$data['gender'];
        $selection->address=$data['category'];
        $selection->website=$data['coachId'];
        $selection->dateOfFoundation=$data['history'];
        $selection->director=$data['clubId'];
        $selection->save();
    
        return redirect('/selection');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Selection  $selection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selection $selection)
    {
        //

    }
}


