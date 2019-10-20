<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use App\StaffType;
use App\Federation;
use App\FederationStaff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {  
 
        if (request()->has('type')) {
            return view('federation.staffs',
                    ['staffs' => Staff::with(['type', 'federation'])->where('type_id',request('type'))->get()]);
        } 

        return view('federation.staffs',
                    ['staffs' => Staff::with(['type', 'federation'])->get()]);
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
        $data = $request->only(['name', 'description', 'thumbnail','staffType', 'fedType']);
         //dd($data);
        
            if(count($data) > 0){
                $staff = new Staff();
                $staff->name = $data['name'];
                $staff->description = $data['description'];
                $staff->type_id = $data['staffType'];

                if ($request->hasFile('thumbnail')) {
                    $name = $staff->name . '.' . $request->thumbnail->extension();
                    $folder = 'assets/photo/';
                    $request->thumbnail->move(public_path($folder), $name);
    
                    $staff->thumbnail = $folder . $name;
                }
               
                $staff->save();

                $federation_staff = new FederationStaff();
                $federation_staff->staff_id = $staff->id;
                $federation_staff->federation_id = $data['fedType'];
                $federation_staff->staff_type_id = $data['staffType'];

                $federation_staff->save();
    
                return redirect('/staffs');        
                } 
         return view('federation/newStaff', [
            'staff' => StaffType::all(),
            'feds' => Federation::all(),
         ]);
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
        
        return view('federation.editStaff', [
            'staff' => $staff,
            'staffs' => StaffType::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        
        $data = $request->only(['name', 'description', 'thumbnail','staffType', 'fedType']);
        
        $staff = Staff::where('id', $id)->first();
        $staff->name = $data['name'];
        $staff->description = $data['description'];
        $staff->type_id = $data['staffType'];

        if ($request->hasFile('thumbnail')) {
            $name = $staff->name . '.' . $request->thumbnail->extension();
            $folder = 'assets/photo/';
            $request->thumbnail->move(public_path($folder), $name);

            $staff->thumbnail = $folder . $name;
        }

        $staff->save();

        $federation_staff = FederationStaff::where('staff_id', $id)->first();
        $federation_staff->federation_id = $data['fedType'];
        $federation_staff->staff_type_id = $data['staffType'];

        $federation_staff->save();

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

        $data = FederationStaff::where('staff_id', $id)->first();
        $data->delete();

        $staff->delete();
        
        return redirect('/staffs');
    }


}
