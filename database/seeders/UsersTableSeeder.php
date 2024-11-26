<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Akbar Geming',
                'email' => 'akbar@gmail.com',
                'password' => bcrypt('akbar'),
                'created_at' => now(),
                'updated_at' => now(),
                'balance' => 349000,

            ],
            [
                'name' => 'Gabriella Abigail',
                'email' => 'ella@gmail.com',
                'password' => bcrypt('asdasd'),
                'created_at' => now(),
                'updated_at' => now(),
                'balance' => 670000,
            
            ],
            [
                'name' => 'Jaya Logam',
                'email' => 'ptjayalogam@gmail.com',
                'password' => bcrypt('asdasd'),
                'created_at' => now(),
                'updated_at' => now(),
                'balance' => 670000,
            
            ],
            [
                'name' => 'Panti Asuhan Bogot',
                'email' => 'pantiashuham@gmail.com',
                'password' => bcrypt('asdasd'),
                'created_at' => now(),
                'updated_at' => now(),
                'balance' => 670000,
            
            ],
        ]);
    }
}