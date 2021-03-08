<?php

namespace App\Http\Controllers;

use App\Destination;

class RutePerjalananController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth:api']);
    }

    public function inisiasi($category, $destination_length)
    {
//        untuk testing
//        $category = [1, 2, 3, 4, 5, 6];
        $destinations = [];
//        untuk testing
//        $destination_length = 7;
        $population = [];

//        menampung semua destinasi yang sesuai dengan kategori
        for ($i = 0; $i < count($category); $i++) {
            foreach ($this->getDestinationByCategory($category[$i]) as $d) {
                array_push($destinations, $d['id']);
            }
        }
//        mengisi kromosom kromosom ke dalam populasi
        for ($i = 0; $i < 100; $i++) {
//            mengacak posisi destinasi destinasi
            shuffle($destinations);

//            mengambil 7 value pertama dari destination yang telah di acak
            $chromosome = [];
            for ($j = 0; $j < $destination_length; $j++) {
                $chromosome[$j] = $destinations[$j];
            }

//            proses menampung kromosom, inisialisasi jarak tempuh, durasi perjalanan, rating, dan fitness
            $population[$i] = array();
            $population[$i]['chromosome'] = $chromosome;
            $population[$i]['distance'] = 0;
            $population[$i]['duration'] = 0;
            $population[$i]['rating'] = 0;
            $population[$i]['fitness'] = 0;
        }


        return $population;
    }

    public function getDestinationByCategory($category)
    {
        return Destination::select('id')->where('category_wisata_id', $category)->get();
    }



    public function mutation(){

    }
}