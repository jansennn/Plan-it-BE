<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::insert([
            [
                'nama' => 'Andreas Tampubolon',
                'email' => 'andreasjr61@gmail.com',
                'password' => 'macan123',
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
