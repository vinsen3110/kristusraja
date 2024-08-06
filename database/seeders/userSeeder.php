<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['username' => 'admin', 'slug' => 'admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('Admin123'), 'phone' => '082150823875', 'address' => 'Kalimantan Selatan, Banjarmasin, Kayu Tangi 2'],
        ];

        DB::table('users')->insert($data);
    }
}
