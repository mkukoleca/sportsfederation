<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = DB::table('events')->get();
        return view('event', ['events' => $event]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['type', 'name', 'season', 'description']);

            if(count($data) > 0){
                $event = new Event();
                $event->type = $data['type']; 
                $event->name = $data['name'];
                $event->season = $data['season'];
                $event->description = $data['description'];
                $event->save();

                return redirect("/event");
            }
    return view('/newEvent');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('/editEvent', compact('event'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['type', 'name', 'season', 'description']);

        $event = Event::where('id', $id)->first();
        $event->type=$data['type'];
        $event->name=$data['name'];
        $event->season=$data['season'];
        $event->description=$data['description'];
        $event->save();
    
        return redirect('/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        
        $event = Event::where('id', $id)->first();
        $event->delete();
        return redirect('/event');
    }
}
