<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function type(){
        return $this->hasOne("App\StaffType");
    }
    protected $table = "staffs";
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'name', 'lastname', 'description', 'type_id'
    ];
}
