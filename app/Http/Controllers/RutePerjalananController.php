<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use App\CategoryWisata;

class RutePerjalananController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function inisiasi(){
        //$destinasi = Destination::select('id')->where(['category_wisata_id' => 1])->pluck('id')->toArray();
        $destinasi = Destination::select('id')->pluck('id')->toArray();

        for($i=0; $i<100;$i++){
            shuffle($destinasi);
            $contoh[$i] = $destinasi;
            for($j=0; $j<count($contoh[$i]); $j++){
                echo $contoh[$i][$j];
            }
            echo "<br>";
        }


        //return $destinasi;
    }
}
