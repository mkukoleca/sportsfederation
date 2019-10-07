<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
<<<<<<< HEAD
    //
=======
    protected $table = 'selection';
    protected $fillable = ['gender', 'category', 'history', 'coachId', 'clubId',  ];

    public function selection(){
    $selection = App\selection::all();}
>>>>>>> c1d7ab0d556c404bcd50852e4c7c88515ac9d6d0
}
