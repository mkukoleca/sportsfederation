<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FederationStaff extends Model
{
    protected $table = 'federation_staff';


    protected $fillable = [

        'federation_id', 'staff_id', 'staff_type_id'
    ];
}
