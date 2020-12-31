<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElektronikaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elektronikas')->insert([
            'nama' => 'Aksesoris',
            'kategori' => 'Aksesoris',
            'gambar' => 'oontz.jpg',
        ]);

        DB::table('elektronikas')->insert([
            'nama' => 'Handphone',
            'kategori' => 'Handphone',
            'gambar' => 'realme-c11.png',
        ]);

        DB::table('elektronikas')->insert([
            'nama' => 'Laptop',
            'kategori' => 'Laptop',
            'gambar' => 'zyrex.jpg',
        ]);

        DB::table('elektronikas')->insert([
            'nama' => 'Monitor',
            'kategori' => 'Monitor',
            'gambar' => 'philips-24inch.jpg',
        ]);
    }
}
