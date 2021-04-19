<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function kabupaten(){
        return $this->belongsTo('App\Kabupaten');
    }

    public function category(){
        return $this->belongsTo('App\CategoryWisata');
    }

    public function per_day(){
        return $this->hasMany('App\RutePerjalananPerDay');
    }
}
