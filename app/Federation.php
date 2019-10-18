<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Federation extends Model
{
    protected $table = 'federations';


    protected $fillable = [

        'name', 'history', 'president', 'description'
    ];

    public function staff() {

         return $this->belongsToMany('App\Staff', 'federation_staff')->withPivot('staff_id');
    }
}
