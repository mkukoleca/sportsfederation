<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SelectionController extends Controller
{
    public function show(){
        $selection = DB::table('selection')->get();
        return view('selection', ['selection' => $selection]);
        
    }
}
