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
        $category = [1,2,3,4,5,6];
        $destination = [];
        if($category->count()>1){
            $destination = $this->getDestinationByCategory(3);
        }else{
            for ($i=0; $i<$category->count();$i++){
                foreach($this->getDestinationByCategory($category[$i]) as $d){
                    array_push($destination , $d);
                }
            }
        }

        return $destination;
        //$destinasi = Destination::select('id')->where(['category_wisata_id' => 1])->pluck('id')->toArray();


//        for($i=0; $i<100;$i++){
//            shuffle($destinasi);
//            $contoh[$i] = $destinasi;
//            for($j=0; $j<count($contoh[$i]); $j++){
//                echo $contoh[$i][$j];
//            }
//            echo "<br>";
//        }


//        return $destinasi;
    }

    public function getDestinationByCategory($category){
        return Destination::select('id')->where('category',$category)->get();
    }
}
