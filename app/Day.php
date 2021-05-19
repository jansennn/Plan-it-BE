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

    public static function boot() {
        parent::boot();

        static::deleting(function($day) { // before delete() method call this
            $day->rute()->delete();
            // do the rest of the cleanup...
        });
    }
}
