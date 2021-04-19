<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutePerjalanan extends Model
{
    public function day(){
        return $this->hasMany('App\Day');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
