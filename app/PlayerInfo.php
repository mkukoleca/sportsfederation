<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerInfo extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'thumbnail',   
    'name',
    'surname',
    'description',
    'position',
    'height',
    'weight',
    'jerseyNumber',
    'dateOfBirth',
    'citizenship',
    'clubHistory',
    'currentClub',
    'selection',
    'created_at',
    'updated_at',

    ];

}
