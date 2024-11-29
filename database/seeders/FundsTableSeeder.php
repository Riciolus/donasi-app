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
                'user_id' => 3,
                'category' => 'Infrastruktur',
                'title' => 'Bantu Bangun Masjid di Desa Pelosok',
                'description' => 'Shalat adalah ibadah yang sangat penting dalam Islam, menjadi sarana bagi seorang hamba untuk mendekatkan diri kepada Allah. Namun, sayangnya, banyak masjid dan mushola di pelosok yang kondisinya sangat memprihatinkan. Bangunan yang seadanya, dinding yang retak, atap yang bocor, hingga perlengkapan shalat yang tidak layak seperti sajadah lusuh, robek, dan berbau, sangat mengganggu kenyamanan beribadah.',
                'goal_amount' => 15000000,
                'collected_amount' => 25000,
                'image_url' => 'funds/tes1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Pendidikan',
                'title' => 'Sedekah Dana Pendidikan Bantu Anak yg Membutuhkan',
                'description' => 'Shalat adalah ibadah yang sangat penting dalam Islam, menjadi sarana bagi seorang hamba untuk mendekatkan diri kepada Allah. Namun, sayangnya, banyak masjid dan mushola di pelosok yang kondisinya sangat memprihatinkan. Bangunan yang seadanya, dinding yang retak, atap yang bocor, hingga perlengkapan shalat yang tidak layak seperti sajadah lusuh, robek, dan berbau, sangat mengganggu kenyamanan beribadah.',
                'goal_amount' => 15000000,
                'collected_amount' => 25000,
                'image_url' => 'funds/tes4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Kegiatan Sosial',
                'title' => 'Kerusakan Jantung Renggut Senyum Lucu Ahza',
                'description' => 'Kesedihan menyelimuti hati Pak Fatrur dan Bu Nur, bagaimana tidak? Putri semata wayang yang mereka sangat sayangi terdiagnosa alami TOF atau Tetralogy of Fallot (ToF) yaitu kelainan jantung bawaan yang cukup langka disebabkan oleh kombinasi dari empat cacat jantung yang hadir pada saat lahir.',
                'goal_amount' => 15000000,
                'collected_amount' => 25000,
                'image_url' => 'funds/tes5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Panti Asuhan',
                'title' => 'Berbagi Makanan Bergizi untuk Santri dan Dhuafa',
                'description' => 'Rasulullah pernah bersabda:


                مَنْ فَطَّرَ صَائِمًا كَانَ لَهُ مِثْلُ أَجْرِهِ غَيْرَ أَنَّهُ لاَ يَنْقُصُ مِنْ أَجْرِ الصَّائِمِ شَيْئًا


                “Siapa memberi makan orang yang berpuasa, maka baginya pahala seperti orang yang berpuasa tersebut, tanpa mengurangi pahala orang yang berpuasa itu sedikit pun juga.” (HR. Tirmidzi no. 807)',
                'goal_amount' => 1500000,
                'collected_amount' => 0,
                'image_url' => 'funds/tes6.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Bantuan Medis & Kesehatan',
                'title' => 'KECELAKAAN TRAGIS, AUL BUTUH BANTUAN BEROBAT',
                'description' => 'Sejak mama papa meninggal, Kak Aul jadi kayak ibu aku juga. Kakak yang urusin aku, kerja keras biar aku bisa sekolah. Aku sedih kakak kecelakaan pas mau kerja, aku gak kuat liat kakak batok kepalanya sampai hancur',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/medis1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Bantuan Medis & Kesehatan',
                'title' => 'Selamatkan Ci Hira dr Kanker Pankreas Metas Liver!',
                'description' => 'Saya Dewanto Suhartono, usia 61 tahun adalah seorang pensiunan yang tidak punya penghasilan dan hanya mengandalkan tabungan pensiun yang makin lama makin menipis jumlahnya. Saat ini istri saya bernama Hira Kusuma Serioso (biasa dipanggil Ci Hira), tengah menderita kanker kepala pankreas yang sudah menyebar ke liver. Kami adalah pasutri yang tidak mempunyai anak karena anak kami satu-satunya sudah meninggal.',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/medis2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Bantuan Medis & Kesehatan',
                'title' => 'DARURAT! Hidupnya Bergantung Kemo & Radioterapi!',
                'description' => 'Kesedihan menyelimuti hati Pak Fatrur dan Bu Nur, bagaimana tidak? Putri semata wayang yang mereka sangat sayangi terdiagnosa alami TOF atau Tetralogy of Fallot (ToF) yaitu kelainan jantung bawaan yang cukup langka disebabkan oleh kombinasi dari empat cacat jantung yang hadir pada saat lahir.',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/medis3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Balita & Anak Sakit',
                'title' => 'DARURAT! Cedera Otak Memburuk, Selamatkan Cize!',
                'description' => 'Hanya ada 11 orang di Indonesia yang menderita penyakit adrenoleukodsythrophy (ALD), yaitu cedera otak yang sangat langka. Salah satunya Cize yang kini terbaring kaku tak bisa berjalan, bicara, maupun',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/anak1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Balita & Anak Sakit',
                'title' => 'URGENT! BANTU CI ACACIA',
                'description' => 'Mama, kanker tulang kenapa jahat banget ya? Kakiku sampai harus dipotong tulangnya sehingga panjangnya jadi beda” - Ci Acacia',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/anak2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Balita & Anak Sakit',
                'title' => 'Kendala Biaya Pengobatan, Bayi Jelita Harus Oprasi',
                'description' => 'Mama, kanker tulang kenapa jahat banget ya? Kakiku sampai harus dipotong tulangnya sehingga panjangnya jadi beda” - Ci Acacia',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/anak3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Bencana Alam',
                'title' => 'Solidaritas Bantu Korban Banjir Bandang Ternate!',
                'description' => 'Kepala Pusat Data, Informasi, dan Komunikasi Kebencanaan Badan Nasional Penanggulangan Bencana (BNPB) Abdul Muhari, dalam keterangan tertulisnya, menuturkan bencana banjir bandang ternate, ini',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/bencana1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Bencana Alam',
                'title' => '5 Tahun Tanpa Masjid, 164 Warga Ibadah di Lapangan',
                'description' => 'Setelah menjadi korban dalam bencana longsor tahun 2018, sebanyak 164 orang mengungsi ke lahan baru yang aman dan meninggalkan kampung lama mereka. ',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/bencana2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'category' => 'Bencana Alam',
                'title' => 'URGENT! Asap Tebal Kebakaran Hutan Kepung Kalbar!',
                'description' => 'TOLONG! Bantu Warga Kalimantan Barat Bernapas!Kebakaran Hutan dan Lahan (Karhutla) yang terjadi di sejumlah titik di wilayah Kalimantan Barat (Kalbar) selama beberapa hari terakhir memicu kabut',
                'goal_amount' => random_int(400000, 12000000),
                'collected_amount' => random_int(400000, 12000000),
                'image_url' => 'funds/bencana3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
            
        ]);
    }
}