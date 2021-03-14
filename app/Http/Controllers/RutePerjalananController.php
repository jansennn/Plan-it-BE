<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Temp;
use Illuminate\Http\Request;

class RutePerjalananController extends Controller
{
    private $generasi = 0;
    private $kromosom_terbaik;

    public function __construct()
    {
//        $this->middleware(['auth:api']);
    }

    public function setPlusGenerasi(){
        $this->generasi = $this->generasi + 1;
    }

    public function setSatuGenerasi(){
        $this->generasi = 0;
    }

    public function setKromosomTerbaik($kromosom){
        $this->kromosom_terbaik = $kromosom;
    }

    public function inisiasi(Request $request)
    {
        $transportation_type = $request->type_transportation;
        $temp_cromosom = Temp::where('id', 4)->first();
        $count_kromosom = $temp_cromosom->value;
        //untuk testing
        $category = [1];
        $destinations = [];
        //untuk testing
        $destination_length = $request->destination_length;
        $population = [];

        //menampung semua destinasi yang sesuai dengan kategori
        for ($i = 0; $i < count($category); $i++) {
            foreach ($this->getDestinationByCategory($category[$i]) as $d) {
                array_push($destinations, $d['id']);
            }
        }
        //mengisi kromosom kromosom ke dalam populasi
        for ($i = 0; $i < $count_kromosom; $i++) {
            //mengacak posisi destinasi destinasi
            shuffle($destinations);

            //mengambil 7 value pertama dari destination yang telah di acak
            $chromosome = [];
            for ($j = 0; $j < $destination_length; $j++) {
                $chromosome[$j] = $destinations[$j];
            }

            //proses menampung kromosom, inisialisasi jarak tempuh, durasi perjalanan, rating, dan fitness
            $population[$i] = array();
            $population[$i]['chromosome'] = $chromosome;
            $population[$i]['distance'] = 0;
            $population[$i]['duration'] = 0;
            $population[$i]['rating'] = 0;
            $population[$i]['fitness'] = 0;
        }


        return $this->mutation($population, $destination_length, $transportation_type);
    }

    public function getDestinationByCategory($category)
    {
        return Destination::select('id')->where('category_wisata_id', $category)->get();
    }



    public function mutation($population, $destination_length, $transportation_type){
        $temp_mutation = Temp::where('id', 2)->first();
        $temp_cromosom = Temp::where('id', 4)->first();
        $mutation_chance = $temp_mutation->value;
        $count_kromosom = $temp_cromosom->value;
        $mutation = $population;

        $total_mutation = ($count_kromosom * $mutation_chance) / 100;

        $idx = 0;

        while($idx < $total_mutation){
            //Pilih secara acak kromosom yang ingin dimutasikan
            $idxChromosom = rand(0, $count_kromosom-1);

            //Pilih 2 gen secara acak untuk ditukar
            $idxGen = rand(0, $destination_length-1);
            $randGen = rand(0, $destination_length-1);


            //Tukar posisi kedua gen tersebut
            $temp = $mutation[$idxChromosom]['chromosome'][$idxGen];
            $mutation[$idxChromosom]['chromosome'][$idxGen] = $mutation[$idxChromosom]['chromosome'][$randGen];
            $mutation[$idxChromosom]['chromosome'][$randGen] = $temp;

            $idx++;
        }
//      return $mutation[$idxChromosom]['chromosome'][5];
        return $this->seleksi($mutation, $population, $destination_length, $transportation_type);
    }

    public function seleksi($mutation, $population, $destination_length, $transportation_type){
        $transportation_type = "mobil";
        $arr_pop_mut = $population;
        //menggabungkan populasi dan hasil mutasi ke dalam satu array
        foreach ($mutation as $mut){
            array_push($arr_pop_mut, $mut);
        }

        $index = 0;
        foreach ($arr_pop_mut as $value){

            //memasukkan gen dalam satu kromosom ke dalam satu array
            $arr = array();
            foreach ($value['chromosome'] as $c){
                array_push($arr, $c);
            }


            $total_jarak = 0;
            $total_rating = 0;
            for($i=0; $i<count($arr); $i++){
                //menghitung jarak keseluruhan dari kromosom
                if($i != count($arr)-1){
                    $destination_awal = Destination::where('id', $arr[$i])->first();
                    $lat_awal = $destination_awal->lat;
                    $long_awal = $destination_awal->long;
                    $destination_akhir = Destination::where('id', $arr[$i+1])->first();
                    $lat_akhir = $destination_akhir->lat;
                    $long_akhir = $destination_akhir->long;

                    $jarak =  $this->getDistanceBetweenPoints($lat_awal, $long_awal, $lat_akhir, $long_akhir);
                    $total_jarak = $total_jarak + (int)$jarak;

                    //menghitung rating
                    $rating = $destination_awal->rating;
                    $total_rating = $total_rating + $rating;
                }else{
                    $destination_awal = Destination::where('id', $arr[$i])->first();
                    $lat_awal = $destination_awal->lat;
                    $long_awal = $destination_awal->long;
                    $destination_akhir = Destination::where('id', $arr[0])->first();
                    $lat_akhir = $destination_akhir->lat;
                    $long_akhir = $destination_akhir->long;

                    $jarak =  $this->getDistanceBetweenPoints($lat_awal, $long_awal, $lat_akhir, $long_akhir);
                    $total_jarak = $total_jarak + (int)$jarak;

                    //menghitung rating
                    $rating = $destination_awal->rating;
                    $total_rating = $total_rating + $rating;
                }

            }

            //menghitung duration
            if($transportation_type == "mobil"){
                $transportation = Temp::where('id', 5)->first();
                $kecepatan = $transportation->value;
                $kecepatan = $kecepatan * 1000;
                $duration = ($total_jarak / $kecepatan) * 60;
            }else{
                $transportation = Temp::where('id', 5)->first();
                $kecepatan = $transportation->value;
                $kecepatan = $kecepatan * 1000;
                $duration = ($total_jarak / $kecepatan) * 60;
            }

            //hasil rating
            $total_rating = (5 * $destination_length) - $total_rating;

            //hasil fitness
            $total_fitness = 1 / ($total_jarak + $duration + $total_rating);

            $arr_pop_mut[$index]['distance'] = (int)($total_jarak /1000);
            $arr_pop_mut[$index]['duration'] = (int)($duration / 60);
            $arr_pop_mut[$index]['rating'] =  $total_rating;
            $arr_pop_mut[$index]['fitness'] = $total_fitness;
            $index++;

        }

        //sorting array menjadi 100 array terbaik
        for($i = 1; $i < count($arr_pop_mut); $i++){
            for($j = $i; $j > 0; $j--){
                if($arr_pop_mut[$j]['fitness'] < $arr_pop_mut[$j-1]['fitness']){
                    $simpan = $arr_pop_mut[$j];
                    $arr_pop_mut[$j] = $arr_pop_mut[$j-1];
                    $arr_pop_mut[$j-1] = $simpan;
                }
            }
        }
        //unset array > 100
        for($i = 0;$i < 200 ; $i++){
            if($i >= 100){
                unset($arr_pop_mut[$i]);
            }
        }


        //menset kromosom terbaik pada generasi 0
        if($this->generasi == 0){
            $this->setKromosomTerbaik($arr_pop_mut[99]);
        }

        //memeriksa jika kromosom terbaik pada generasi yang sedang dilakukan > kromosom terbaik yang sedang disimpan, maka kromosom terbaik yang disimpan akan diganti
        if($arr_pop_mut[99]['fitness'] > $this->kromosom_terbaik['fitness']){
            $this->setKromosomTerbaik($arr_pop_mut[99]);
            $this->setSatuGenerasi();
        }

        //Menambah jumlah generasi
        $this->setPlusGenerasi();

        //jika sudah 100 generasi dan kromosom terbaik tidak berganti
        if($this->generasi == 3){
            return $this->kromosom_terbaik;
        }

        return $population;

        //jika belum 100 generasi maka akan kembali ke mutation
        if($this->generasi < 100){
            return $this->mutation($population, $destination_length, $transportation_type);
        }


    }

    public function getDistanceBetweenPoints($lat1, $long1, $lat2, $long2){
        $R = 6378137;
        $dLat = deg2rad($lat2 - $lat1);
        $dLong = deg2rad($long2 - $long1);

        $a = sin($dLat / 2)
            *
            sin($dLat / 2)
            +
            cos($this->degreesToRadians($lat1))
            *
            cos($this->degreesToRadians($lat1))
            *
            sin($dLong / 2)
            *
            sin($dLong / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $R * $c;

        return $distance;
    }

    public function degreesToRadians($degrees){
        return $degrees * pi() /180;
    }
}