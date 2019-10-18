<?php

namespace App;
use App\Club;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    protected $table = 'selection';
    protected $fillable = ['gender', 'category', 'history', 'staffTypeId', 'clubId'];

    public function club(){

    return $this->HasMany("App\Club");
    }

    
}
