<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    public function event() {
        return $this->belongsTo("App\Event");
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eventId',   
        'date',
        'place',
        'home',
        'guest',
        'referee1',
        'referee2',
        'delegate',
        'round',
        'scoresGuest',
        'scoresHome',
        'note',
        'created_at',
        'updated_at',
        ];
}
