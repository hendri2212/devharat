<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Fun; 

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
            'Seni Pertunjukan',
            'Penerbitan',
            'Aplikasi',
        ];

        // Gunakan hanya Fun::create
        // foreach ($subsektors as $subsektor) {
        //     DB::table('fun')->insert([
        //         'fun_name' => $subsektor,
        //     ]);
        // }

       foreach ($subsektors as $subsektor) {
        Fun::updateOrCreate(['fun_name' => $subsektor]);
        }
    }
}