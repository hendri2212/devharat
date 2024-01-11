<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subsektors = [
            'Pengembang Permainan',
            'Arsitektur',
            'Desain Interior',
            'Musik',
            'Seni Rupa',
            'Desain Produk',
            'Fashion',
            'Kuliner',
            'Film, Animasi dan Video',
            'Fotografi',
            'Desain Komunikasi Visual',
            'Televisi dan Radio',
            'Kriya',
            'Periklanan',
            'Seni Perunjukan',
            'Penerbitan',
            'Aplikasi',
        ];

        // Tambahkan 17 data ke dalam tabel 'fun' dengan kolom 'fun_name'
        foreach ($subsektors as $subsektor) {
            DB::table('fun')->insert([
                'fun_name' => $subsektor,
            ]);
        }
    }
}
