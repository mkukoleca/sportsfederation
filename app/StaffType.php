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

    public function staffs(){
        
        return $this->belongsToMany('App\Staff', 'federation_staff')->withPivot('staff_type_id');

    }  
    
    public function staffType()
    {
        return $this->belongsTo("App\Staff", 'type_id');
    }
}
