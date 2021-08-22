<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
                'firstname' => 'Andreas',
                'lastname' => 'Tampubolon',
                'email' => 'andreasjr61@gmail.com',
                'password' => bcrypt('macan123'),
                'role' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'firstname' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 2,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'firstname' => 'Helmuth',
                'lastname' => 'Tampubolon',
                'email' => 'helmuth@gmail.com',
                'password' => bcrypt('helmuth'),
                'role' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'firstname' => 'planit',
                'lastname' => 'planit',
                'email' => 'planit@gmail.com',
                'password' => bcrypt('planit'),
                'role' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
