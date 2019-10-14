<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function type(){
        return $this->hasOne("App\StaffType");
    }
}
