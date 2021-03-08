<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Temp::insert([
            [
                'name' => 'crossover_rate',
                'value' => 20,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'name' => 'mutation_chance',
                'value' => 20,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'name' => 'generasi_length',
                'value' => 100,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
