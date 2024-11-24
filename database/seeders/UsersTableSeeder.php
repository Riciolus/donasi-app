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
                'password' => 'akbar',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Gabriella Abigail',
                'email' => 'ella@gmail.com',
                'password' => 'asdasd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}