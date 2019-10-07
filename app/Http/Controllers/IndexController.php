<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class IndexController extends Controller
{
    public function index(){
        return view('/index', ['clubs' => Club::all()]);
    }
}
