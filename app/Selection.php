<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    protected $table = 'selection';
    protected $fillable = ['gender', 'category', 'history', 'coachId', 'clubId'];

    /* public function selection(){
    $selection = App\selection::all();
    } */
}
