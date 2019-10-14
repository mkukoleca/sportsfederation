<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffType extends Model
{
    protected $table = "staff_types";
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'name'
    ];

}
