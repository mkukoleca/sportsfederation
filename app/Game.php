<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;


class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eventId',   
        'date',
        'place',
        'homeClubId',
        'guestClubId',
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

    public function event() {
        return $this->belongsTo("App\Event");
    }
}
