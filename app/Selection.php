<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Club;

class Selection extends Model
{
    protected $table = 'selection';
    protected $fillable = ['gender', 'category', 'history', 'staffTypeId', 'clubId'];

    public function club (){
        return $this->hasMany('App\Club', 'clubId');
    }
}
