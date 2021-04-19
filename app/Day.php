<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function rute(){
        return $this->hasMany('App\RutePerjalananPerDay');
    }

    public function rute_perjalanan(){
        return $this->belongsTo('App\RutePerjalanan');
    }
}
