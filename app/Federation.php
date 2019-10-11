<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Federation extends Model
{
    protected $table = 'federations';


    protected $fillable = [

        'name', 'history', 'president', 'description'
    ];
}
