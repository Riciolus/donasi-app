<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FundsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('funds')->insert([
            [
                'title' => 'Bantu Bangun Masjid di Desa Pelosok',
                'description' => 'Shalat adalah ibadah yang sangat penting dalam Islam, menjadi sarana bagi seorang hamba untuk mendekatkan diri kepada Allah. Namun, sayangnya, banyak masjid dan mushola di pelosok yang kondisinya sangat memprihatinkan. Bangunan yang seadanya, dinding yang retak, atap yang bocor, hingga perlengkapan shalat yang tidak layak seperti sajadah lusuh, robek, dan berbau, sangat mengganggu kenyamanan beribadah.',
                'goal_amount' => 15000000,
                'collected_amount' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bantu Warga Terdampak Erupsi Gunung Lewotobi',
                'description' => 'Pada Minggu malam, 3 November 2024, Gunung Lewotobi di Flores Timur, NTT, mengalami erupsi yang berdampak bagi masyarakat sekitar. ',
                'goal_amount' => 8000000,
                'collected_amount' => 534700,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}