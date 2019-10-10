<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event',   
        'date',
        'place',
        'home',
        'guest',
        'referee1',
        'referee2',
        'delegate',
        'round',
        'scoresHome',
        'scoresGuest',
        'note',
        'created_at',
        'updated_at',
        ];
}
