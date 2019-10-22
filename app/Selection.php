<?php

namespace App;

use App\Club;
use App\Staff;
use App\StaffType;
use App\Playerinfo;
use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    protected $table = 'selection';
    protected $fillable = ['gender', 'category', 'history', 'coachId', 'clubId'];

    public function club(){
        return $this->belongsTo('App\Club', 'clubId');
    }
    public function staffType()
    {
        return $this->belongsTo("App\Staff", 'coachId');
    }
    public function player()
    {
        return $this->hasMany("App\PlayerInfo");
    }

}
