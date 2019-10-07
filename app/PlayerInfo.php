<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerInfo extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'Thumbnail',   
    'Name',
    'Surname',
    'Description',
    'Position',
    'Height',
    'Weight',
    'Jersey number',
    'Date of birth',
    'Citizenship',
    'Club history',
    'Current club',
    'Selection',
    'Created_at',
    'Updated_at',

    ];

}
