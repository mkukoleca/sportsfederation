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
    public function index(){
      //  $staff = Staff::with('staff_types')->with('name')->where('id', $id)->first();
        return view('federation.staffs',['staffs' => Staff::all()]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'lastname', 'description']);
     
        
            if(count($data) > 0){
                $staff = new Staff();
                $staff->name = $data['name'];
                $staff->lastname = $data['lastname'];
                $staff->description = $data['description'];
               
                $staff->save();
    
                return redirect('/staffs');        
                } 
         return view('federation/newStaff');
    }
        
        
              
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        
        return view('federation.editStaff', ['staff' => $staff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $staff = Staff::findOrFail($id);

        $staff->name = request('name');
        $staff->lastname = request('lastname');
        $staff->description = request('description');

        $staff->save();

        return redirect('/staffs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id, Request $request){
        
        $staff = Staff::where('id', $id)->first();
        $staff->delete();
        return redirect('/staffs');
    }


}
