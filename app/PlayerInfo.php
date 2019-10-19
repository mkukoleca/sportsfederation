<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;

class PlayerInfo extends Model

{

    public function club() {
        return $this->belongsTo("App\Club");
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
    'clubHistory',
    'clubId',
    'selection',
    'created_at',
    'updated_at',

    ];

}
