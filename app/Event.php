<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

class Event extends Model
{

    public function game(){
        return $this->hasMany("App\Game");
    }

    protected $table = 'events';
    protected $fillable = ['type', 'name', 'season', 'description'];
}
