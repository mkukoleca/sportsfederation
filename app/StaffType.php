<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffType extends Model
{
    protected $table = "staff_types";
    public $timestamps = false;
    
    const DELEGATE = 1;
    const REFEREE = 2;
    const COACH = 3;
    const DOCTOR = 4;
    
    protected $fillable = [
        'id', 'name'
    ];

    public function staffs(){
        
        return $this->belongsToMany('App\Staff', 'federation_staff')->withPivot('staff_type_id');

    }  
    
    public function staffType()
    {
        return $this->hasMany("App\Staff");
    }
}
