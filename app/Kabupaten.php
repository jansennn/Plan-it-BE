<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    public function destination(){
        return $this->hasMany('App\Destination');
    }
}
