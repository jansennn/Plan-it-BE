<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Temp;
use Illuminate\Http\Request;
use DatePeriod;
use DateInterval;
use DateTime;
use Carbon\CarbonPeriod;
use Carbon\Carbon;




class RutePerjalananController extends Controller
{
    private $generasi = 0;
    private $kromosom_terbaik;
    private $count_day;
    private $transportation_type;
    private $count_kromosom;
    private $destination_length;
    private $crossover_rate;
    private $mutation_rate;
    private $population;
    private $tanggal_awal;
    private $tanggal_akhir;

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

    public function setTransportationType($type){
        $this->transportation_type = $type;
    }

    public function setCountDay($day){
        $this->count_day = $day;
    }

    public function setCountKromosom($kromosom){
        $this->count_kromosom = $kromosom;
    }

    public function setDestinationLength($length){
        $this->destination_length = $length;
    }

    public function setCrossoverRate($rate){
        $this->crossover_rate = $rate;
    }

    public function setMutationRate($rate){
        $this->mutation_rate = $rate;
    }

    public function setPopulation($pop){
        $this->population = $pop;
    }

    public function setTanggalAwal($tanggal){
        $this->tanggal_awal = $tanggal;
    }

    public function setTanggalAkhir($tanggal){
        $this->tanggal_akhir = $tanggal;
    }
    public function inisiasi(Request $request)
    {
        //tipe transportasi
        $transportation_type = $request->type_transportation;
        $this->setTransportationType($transportation_type);

        //jumlah hari dari rentang tanggal
        $tanggal_awal = strtotime($request->date[0]);
        $tanggal_akhir = strtotime($request->date[1]);
        $datediff = $tanggal_akhir - $tanggal_awal;
        $this->setCountDay(round($datediff / (60 * 60 * 24)));
        //set tanggal awal
        $this->setTanggalAwal($request->date[0]);
        //set tanggal akhir
        $this->setTanggalAwal($request->date[1]);

        //jumlah kromosom dalam satu generasi
        $temp_cromosom = Temp::where('id', 4)->first();
        $count_kromosom = $temp_cromosom->value;
        $this->setCountKromosom($count_kromosom);

        //jumlah destinasi dalam satu kromosom
        $destination_length = $request->destination_length;
        $this->setDestinationLength($destination_length);

        //set crossover rate
        $temp_crossover = Temp::where('id', 1)->first();
        $crossover = $temp_crossover->value;
        $this->setCrossoverRate($crossover);

        //set mutation rate
        $temp_mutation = Temp::where('id', 2)->first();
        $mutation_chance = $temp_mutation->value;
        $this->setMutationRate($mutation_chance);


        //untuk testing
        $category = [1];
        $destinations = [];
        //untuk testing

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

        //set populasi
        $this->setPopulation($population);

        return $this->crossover($this->population, 0.2);
    }

    public function getDestinationByCategory($category)
    {
        return Destination::select('id')->where('category_wisata_id', $category)->get();
    }



    public function mutation($hasil_crossover, $destination_length, $transportation_type){

        $mutation = $hasil_crossover;

        $total_mutation = ($this->count_kromosom * $this->mutation_rate) / 100;


        $idx = 0;
        while($idx < $total_mutation){
            //Pilih secara acak kromosom yang ingin dimutasikan
            $idxChromosom = rand(0, count($hasil_crossover)-1);

            //Pilih 2 gen secara acak untuk ditukar
            $idxGen = rand(0, $this->destination_length-1);
            $randGen = rand(0, $this->destination_length-1);


            //Tukar posisi kedua gen tersebut
            $temp = $mutation[$idxChromosom]['chromosome'][$idxGen];
            $mutation[$idxChromosom]['chromosome'][$idxGen] = $mutation[$idxChromosom]['chromosome'][$randGen];
            $mutation[$idxChromosom]['chromosome'][$randGen] = $temp;

            $idx++;
        }
//      return $mutation[$idxChromosom]['chromosome'][5];
        return $this->seleksi($mutation, $this->population, $destination_length, $transportation_type);
    }

    public function seleksi($mutation, $population, $destination_length, $transportation_type){

        $transportation_type = $this->transportation_type;
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
                if($arr_pop_mut[$j]['fitness'] > $arr_pop_mut[$j-1]['fitness']){
                    $simpan = $arr_pop_mut[$j];
                    $arr_pop_mut[$j] = $arr_pop_mut[$j-1];
                    $arr_pop_mut[$j-1] = $simpan;
                }
            }
        }
        $hasil = [];
        for($i=0; $i< 20; $i++){
            array_push($hasil, $arr_pop_mut[$i]);
        }


        //menset kromosom terbaik pada generasi 0
        if($this->generasi == 0){
            $this->setKromosomTerbaik($hasil[0]);
        }

        //memeriksa jika kromosom terbaik pada generasi yang sedang dilakukan > kromosom terbaik yang sedang disimpan, maka kromosom terbaik yang disimpan akan diganti
        if($hasil[0]['fitness'] > $this->kromosom_terbaik['fitness']){
            $this->setKromosomTerbaik($hasil[0]);
            $this->setSatuGenerasi();
        }

        //Menambah jumlah generasi
        $this->setPlusGenerasi();

        //jika sudah 100 generasi dan kromosom terbaik tidak berganti
        if($this->generasi == 3){
            $jumlah_destinasi = count($this->kromosom_terbaik['chromosome']);
            $hasil_algoritma = $this->kromosom_terbaik['chromosome'];


//            if(array_key_exists(4, $hasil_algoritma)){
//                return "haha";
//            }
//            if($hasil_algoritma[5] != null){
//                return $hasil_algoritma[6];
//            }

            $data = [];
            $bagi = $jumlah_destinasi / ($this->count_day+1);
            $bagi = (int)$bagi;
            $idx = 0;
            return $bagi;
            for($i=0; $i <= $this->count_day ;$i++){
                $data[$i] = array();
                $data[$i]['tanggal'] = "20 Maret 2021";
                $j = 0;
                while($idx < $jumlah_destinasi){
                    $data[$i]['destinasi'][$j] = array();
                    $data[$i]['destinasi'][$j]['nama_destinasi'] = "haha";
                    $data[$i]['destinasi'][$j]['gambar'] = "gambar";
                    $data[$i]['destinasi'][$j]['jarak'] = "jarak";

                    if($idx+1 == $bagi){
                        break;
                    }
                    $idx++;
                    $j++;


                }

//                for($j=0 ; $j<2 ; $j++){
//                    $data[$i]['destinasi'][$j] = array();
//                    $data[$i]['destinasi'][$j]['nama_destinasi'] = "haha";
//                    $data[$i]['destinasi'][$j]['gambar'] = "gambar";
//                    $data[$i]['destinasi'][$j]['jarak'] = "jarak";
//                }

            }

            return $data;

        }

        //jika belum 100 generasi maka akan kembali ke mutation
        if($this->generasi < 100){
            //return $this->mutation($hasil, $destination_length, $transportation_type);
            return $this->crossover($hasil, 0.2);
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

    public function crossover($population, $crossover_rate)
    {
        $offspring = array();
        $change = ($crossover_rate * count($population))/2;
        $idx = 0;
        while ($idx < $change) {
            //mencari pasangan induk
            $prand = rand(0, count($population) - 1);
            $parent1 = $population[$prand];
            $prand2 = rand(0, count($population) - 1);
            $parent2 = $population[$prand2];

            $child1 = $parent1;
            $child2 = $parent2;

            $totalNode = count($parent1['chromosome']);
            $countLockedGened1 = ceil($totalNode / 2);
            $rand = rand(0, $countLockedGened1 - 1);

            $sama1 = [];
            $tsama1 = [];
            $sama2 = [];
            $tsama2 = [];
            $path1 = [];
            $path2 = [];

            for ($i = 0; $i < $totalNode; $i++) {
                array_push($path1, $parent1['chromosome'][$i]);
                if (($i >= $rand) && ($i < $rand + $countLockedGened1)) {
                    $path1[$i] = $parent2['chromosome'][$i];
                } else {
                    $check = 0;
                    for ($r = $rand; $r < $rand + $countLockedGened1; $r++) {
                        if ($parent2['chromosome'][$r] == $path1[$i]) {
                            array_push($sama1, $i);
                            $check = 1;
                            break;
                        }
                    }
                    if ($check == 0) array_push($tsama1, $i);
                }
            }
            for ($i = 0; $i < $totalNode; $i++) {
                array_push($path2, $parent2['chromosome'][$i]);
                if (($i >= $rand) && ($i < $rand + $countLockedGened1)) {
                    $path2[$i] = $parent1['chromosome'][$i];
                } else {
                    $check = 0;
                    for ($r = $rand; $r < $rand + $countLockedGened1; $r++) {
                        if ($parent1['chromosome'][$r] == $path2[$i]) {
                            array_push($sama2, $i);
                            $check = 1;
                            break;
                        }
                    }
                    if ($check == 0) array_push($tsama2, $i);
                }
            }

            $c1 = count($sama1);
            $c2 = count($sama2);


            $max = max($c1, $c2);
            if (($c1 != 0) || ($c2 != 0)) {
                if ($c1 > $c2) {
                    $c = count($tsama1);
                    foreach ($tsama2 as $t2) {
                        if ($c1 == $c2) {
                            break;
                        } else {
                            if ($c == 0) {
                                array_push($sama2, $t2);
                                $c2++;
                            } else {
                                $check = 0;
                                for ($i = 0; $i < count($tsama1); $i++) {
                                    if ($path2[$t2] == $path1[$tsama1[$i]]) {
                                        array_splice($tsama1, $i, 1);
                                        $c--;
                                        $check = 1;
                                        break;
                                    }
                                }
                                if ($check == 0) {
                                    array_push($sama2, $t2);
                                    $c2 = +1;
                                }
                            }
                        }
                    }
                } elseif ($c1 < $c2) {
                    $c = count($tsama2);
                    foreach ($tsama1 as $t1) {
                        if ($c1 == $c2) {
                            break;
                        } else {
                            if ($c == 0) {
                                array_push($sama1, $t1);
                                $c1++;
                            } else {
                                $check = 0;
                                for ($i = 0; $i < count($tsama2); $i++) {
                                    if ($path1[$t1] == $path2[$tsama2[$i]]) {
                                        array_splice($tsama2, $i, 1);
                                        $c--;
                                        $check = 1;
                                        break;
                                    }
                                }
                                if ($check == 0) {
                                    array_push($sama1, $t1);
                                    $c1++;
                                }
                            }
                        }
                    }
                }
                for ($i = 0; $i < $max; $i++) {
                    $path1[$sama1[$i]] = $parent2['chromosome'][$sama2[$i]];
                    $path2[$sama2[$i]] = $parent1['chromosome'][$sama1[$i]];
                }
            }

            $child1['chromosome'] = $path1;
            $child2['chromosome'] = $path2;

            array_push($offspring, $child1);
            array_push($offspring, $child2);
            $idx++;
        }

//        return count($offspring);
          return $this->mutation($offspring, $this->destination_length, $this->transportation_type);
    }

}