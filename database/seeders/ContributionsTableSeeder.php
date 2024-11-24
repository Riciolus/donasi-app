<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContributionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contributions')->insert([
            [
                'user_id' => 1, // Assuming John Doe's user_id is 1
                'fund_id' => 1, // School Project's fund_id is 1
                'amount' => 25000,
                'contribution_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Assuming Jane Smith's user_id is 2
                'fund_id' => 2, // Medical Support's fund_id is 2
                'amount' => 50000,
                'contribution_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}