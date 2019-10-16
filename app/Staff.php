<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'name', 'lastname', 'description', 'type_id', 'thumbnail'
    ];

   public function types(){

       return $this->belongsToMany('App\StaffType', 'federation_staff')->withPivot('staff_type_id');
   }

   public function feds(){

    return $this->belongsToMany('App\Federation','federation_staff')->withPivot('federation_id');
}
 

}
