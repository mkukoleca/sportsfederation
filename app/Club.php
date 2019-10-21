<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Game;
use App\Selection;
use App\PlayerInfo;

class Club extends Model
{
    protected $table = "clubs";

    protected $fillable = [
        'id', 'name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail'
    ];

    public function selection() {
        return $this->hasMany("App\Selection");
    }

    public function players() {
        return $this->hasMany("App\PlayerInfo");
    }

    public function games() {
        return $this->hasMany("App\Game");
    }   
}