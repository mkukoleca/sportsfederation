<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff', [
            'staffs' => Staff::all(),
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    
    public function edit($id)
    {
        $staff = Staff::where('id', $id)->first();
        return view('/editStaff',compact('staff'));
        
    }

    
    public function update($id, Request $request)
    {
        $data = $request->only(['name', 'desription','type_id']);

        $staff=Staff::where('id', $id)->first();
        $staff->name=$data['name'];
        $staff->description=$data['description'];
        $staff->type_id=$data['type_id'];
        $staff->save();
    
        return redirect('/staff');
    }

    
    public function destroy(Staff $staff)
    {
        //
    }
}
