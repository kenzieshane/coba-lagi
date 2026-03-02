<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class add_shop_db extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shop_db')->insert([
            'name' => 'NUSANTARA MERAH',
            'slug' => 'nusantara-merah',
            'description' => 'Seri pramula, kumpulan cerita dibalik seri-seri buku selanjutnya, pra mula REPUBLIK RAKYAT INDONESIA SERIKAT dan BARA BARATIMUR.',
            'price' => 'Rp 120.000',
            'image' => 'buku.png',
            'category' => 'Fiction, History',
        ]);

        DB::table('shop_db')->insert([
            'name' => 'REPUBLIK RAKYAT INDONESIA SERIKAT',
            'slug' => 'republik-rakyat-indonesia-serikat',
            'description' => '1985, REPUBLIK RAKYAT INDONESIA SERIKAT telah berhasil berjaya',
            'price' => 'Rp 320.000',
            'image' => 'buku1.png',
            'category' => 'Action',
        ]);

        DB::table('shop_db')->insert([
            'name' => 'BARA BARATIMUR',
            'slug' => 'bara-baratimur',
            'description' => 'Di antara abu dan bara, manusia bertanya: apakah kebenaran adalah milik yang menang, ataukah milik yang bertahan? Sebuah renungan tentang kekuasaan dan kemanusiaan.',
            'price' => 'Rp 175.000',
            'image' => 'buku2.png',
            'category' => 'Poetry',
        ]);

        DB::table('shop_db')->insert([
            'name' => 'GARIS BATAS',
            'slug' => 'garis-batas',
            'description' => 'Siapa yang menentukan di mana tanah berakhir dan langit dimulai? Eksplorasi filosofis tentang batas — antara negara, manusia, dan diri sendiri.',
            'price' => 'Rp 140.000',
            'image' => 'buku.png',
            'category' => 'Insight',
        ]);

        DB::table('shop_db')->insert([
            'name' => 'KEHENDAK TANPA MAHKOTA',
            'slug' => 'kehendak-tanpa-mahkota',
            'description' => 'Terinspirasi dari pemikiran Nietzsche dan kearifan Jawa, buku ini mempertanyakan apakah kekuatan sejati lahir dari takhta — atau dari keikhlasan melepasnya.',
            'price' => 'Rp 210.000',
            'image' => 'buku.png',
            'category' => 'Poetry',
        ]);

        DB::table('shop_db')->insert([
            'name' => 'RUANG DI ANTARA KATA',
            'slug' => 'ruang-di-antara-kata',
            'description' => 'Bahasa adalah penjara sekaligus pembebas. Kumpulan esai tentang bagaimana kata-kata membentuk realitas kita, dan apa yang tersisa ketika kata tak lagi cukup.',
            'price' => 'Rp 155.000',
            'image' => 'buku.png',
            'category' => 'Poetry',
        ]);
    }
}
