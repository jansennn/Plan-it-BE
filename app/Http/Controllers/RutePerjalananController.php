<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class RutePerjalananController extends Controller
{
    public function inisiasi(){
        $destinasi = Destination::select('id')->pluck('id')->toArray();




        return $destinasi;
    }
}
