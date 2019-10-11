<?php

namespace App\Http\Controllers;

use App\Federation;
use Illuminate\Http\Request;

class FederationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('federation', [
            'federations' => Federation::all(),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function edit(Federation $federation)
    {
        return view('federationEdit', compact('federation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $federation = Federation::findOrFail($id);
        
        $federation->name = request('name');
        $federation->history = request('history');
        $federation->president = request('president');
        $federation->description = request('description');

        $federation->save();

        return redirect('/');
    }

}
