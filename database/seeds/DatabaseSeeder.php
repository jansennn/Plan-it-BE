<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryWisataSeeder::class,
            KabupatenSeeder::class,
            UserSeeder::class,
            TempSeeder::class,
            DestinasiSeeder::class
        ]);
    }
}
