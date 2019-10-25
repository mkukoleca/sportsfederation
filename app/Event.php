<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['type', 'name', 'season', 'description'];

    public function games(){
        return $this->hasMany('App\Game', 'eventId');
    }
}
