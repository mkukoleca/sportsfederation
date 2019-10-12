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
        
            $data = $request->only(['name', 'history', 'owner', 'description']);
         
            
                if(count($data) > 0){
                    $federation = new Federation();
                    $federation->name = $data['name'];
                    $federation->history = $data['history'];
                    $federation->owner = $data['owner'];
                    $federation->description = $data['description'];
                    $federation->save();
        
                    return redirect("/federation");        
                    } 
             return view('/newFederation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function show(Federation $federation)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Federation  $federation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $federation = Federation::where('id', $id)->first();
            return view('DeleteFederation',compact('club'));
    }
    public function clear($id){
        $federation = Federation::where('id', $id)->delete();
        return redirect('/federation');
    }
}
