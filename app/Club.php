<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PlayerInfo;
use App\Game;



class Club extends Model
{
    public function selection() {
        return $this->belongsTo("App\Selection");
    }

    public function players() {
        return $this->hasMany("App\PlayerInfo");
    }
    public function games() {
        return $this->hasMany("App\Game");
    }





    protected $table = "clubs";
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail'
    ];

}