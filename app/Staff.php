<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'name', 'lastname', 'description', 'type_id'
    ];
}
