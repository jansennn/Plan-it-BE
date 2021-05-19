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

    public static function boot() {
        parent::boot();

        self::deleting(function($rute_perjalanan) { // before delete() method call this
            $rute_perjalanan->day()->each(function($day){
                $day->delete();
            });
            // do the rest of the cleanup...
        });
    }
}
