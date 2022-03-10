<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarHargaPraktikum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_harga_praktikum')->insert([
            'praktikum' => 'Bahan',
            'harga' => '140000',
        ]);
        DB::table('daftar_harga_praktikum')->insert([
            'praktikum' => 'Ilmu ukur tanah',
            'harga' => '70000',
        ]);
        DB::table('daftar_harga_praktikum')->insert([
            'praktikum' => 'Perpetaan',
            'harga' => '80000',
        ]);
        DB::table('daftar_harga_praktikum')->insert([
            'praktikum' => 'Hidrolika',
            'harga' => 'null',
        ]);
        DB::table('daftar_harga_praktikum')->insert([
            'praktikum' => 'Perkerasan jalan raya',
            'harga' => '160000',
        ]);
        DB::table('daftar_harga_praktikum')->insert([
            'praktikum' => 'Mekanika tanah',
            'harga' => 'null',
        ]);
        DB::table('daftar_harga_praktikum')->insert([
            'praktikum' => 'Beton',
            'harga' => '125000',
        ]);
    }
}
