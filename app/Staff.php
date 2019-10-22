<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    public $timestamps = false;


    public function type()
    {
        return $this->belongsTo("App\StaffType");
    }

    public function federationType()
    {
        return $this->belongsTo("App\Federation"); // TODO: add pivot type relation
    }

    protected $fillable = [
        'id', 'name', 'description', 'type_id', 'thumbnail'
    ];

    public function types()
    {

        return $this->belongsToMany('App\StaffType');
    }

    public function federation()
    {
        return $this->belongsToMany('App\Federation', 'federation_staff');
    }

    public static function byType($type = StaffType::COACH) 
    {
        return self::where('type_id', $type)->get();
    }

    public function game()
    {
        return $this->hasMany('App\Game');
    }
}
