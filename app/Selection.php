<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
<<<<<<< HEAD
    protected $table = 'selection';
    protected $fillable = ['gender', 'category', 'history', 'coachId', 'clubId'];

    /* public function selection(){
    $selection = App\selection::all();
    } */
=======
    
    protected $table = 'selection';
    protected $fillable = ['gender', 'category', 'history', 'coachId', 'clubId'];

    public function selection(){
        $selection = App\selection::all();
    }
>>>>>>> 73c1a6c811644d5e600a02c36fb362f689b1893d
}
