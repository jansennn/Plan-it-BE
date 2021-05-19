<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutePerjalananPerDay extends Model
{
    public function destinasi(){
        return $this->belongsTo('App\Destination', 'destination_id');
    }

    public function day(){
        return $this->belongsTo('App\Day');
    }


}
