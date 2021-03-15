<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Temp;

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



    public function mutation($population, $destination_length){
        $temp_mutation = Temp::where('id', 2)->first();
        $temp_cromosom = Temp::where('id', 4)->first();
        $mutation_chance = $temp_mutation->value;
        $count_kromosom = $temp_cromosom->value;

        $total_mutation = ($count_kromosom * $mutation_chance) / 100;

        $idx = 0;

        while($idx < $total_mutation){
            //Pilih secara acak kromosom yang ingin dimutasikan
            $idxChromosom = rand(0, $count_kromosom);

            //Pilih 2 gen secara acak untuk ditukar
            $idxGen = rand(1, $destination_length);
            $randGen = rand(1, $destination_length);


            //Tukar posisi kedua gen tersebut
            $temp = $population[$idxChromosom]['chromosome'][$idxGen];
            $population[$idxChromosom]['chromosome'][$idxGen] = $population[$idxChromosom]['chromosome'][$randGen];
            $population[$idxChromosom]['chromosome'][$randGen] = $temp;

            $idx++;
        }
        return $population;
    }

    public function crossover($population, $crossover_rate)
    {

        $offspring = $population;
        $change = $crossover_rate * count($population);
        $idx = 0;
        while ($idx < $change) {
            //mencari pasangan induk
            $prand = rand(0, count($population) - 1);
            $parent1 = $population[$prand];
            $prand2 = rand(0, count($population) - 1);
            $parent2 = $population[$prand2];

            $child1 = $parent1;
            $child2 = $parent2;

            $totalNode = count($parent1['genes']);
            $countLockedGened1 = ceil($totalNode / 2);
            $rand = rand(0, $countLockedGened1 - 1);

            $sama1 = [];
            $tsama1 = [];
            $sama2 = [];
            $tsama2 = [];
            $path1 = [];
            $path2 = [];

            for ($i = 0; $i < $totalNode; $i++) {
                array_push($path1, $parent1['genes'][$i]);
                if (($i >= $rand) && ($i < $rand + $countLockedGened1)) {
                    $path1[$i] = $parent2['genes'][$i];
                } else {
                    $check = 0;
                    for ($r = $rand; $r < $rand + $countLockedGened1; $r++) {
                        if ($parent2['genes'][$r] == $path1[$i]) {
                            array_push($sama1, $i);
                            $check = 1;
                            break;
                        }
                    }
                    if ($check == 0) array_push($tsama1, $i);
                }
            }
            for ($i = 0; $i < $totalNode; $i++) {
                array_push($path2, $parent2['genes'][$i]);
                if (($i >= $rand) && ($i < $rand + $countLockedGened1)) {
                    $path2[$i] = $parent1['genes'][$i];
                } else {
                    $check = 0;
                    for ($r = $rand; $r < $rand + $countLockedGened1; $r++) {
                        if ($parent1['genes'][$r] == $path2[$i]) {
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
                    $path1[$sama1[$i]] = $parent2['genes'][$sama2[$i]];
                    $path2[$sama2[$i]] = $parent1['genes'][$sama1[$i]];
                }
            }

            $child1['genes'] = $path1;
            $child2['genes'] = $path2;

            array_push($offspring, $child1);
            array_push($offspring, $child2);
            $idx++;
        }

        return $offspring;
    }
}
