<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use App\CategoryWisata;

class RutePerjalananController extends Controller
{
    public function inisiasi(){
        $destinasi = Destination::select('id')->where(['category_wisata_id' => 1])->pluck('id')->toArray();




        return $destinasi;
    }
}
