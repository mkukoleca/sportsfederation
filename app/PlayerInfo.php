<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;
use App\Selection;

class PlayerInfo extends Model

{
    public function club (){
        return $this->belongsTo('App\Club', 'clubId');
    }

    public function selection (){
        return $this->belongsTo('App\Selection', 'selectionId');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'thumbnail',   
    'name',
    'description',
    'position',
    'height',
    'weight',
    'jerseyNumber',
    'dateOfBirth',
    'citizenship',
    'playerHistory',
    'clubId',
    'selectionId',
    'created_at',
    'updated_at',

    ];

}
