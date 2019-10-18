<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Selection;


class Club extends Model
{
    protected $table = "clubs";
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail'
    ];

    public function selection()
    {
        return $this->belongsTo('App\Selection');
    }

}