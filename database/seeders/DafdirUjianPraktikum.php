<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DafdirUjianPraktikum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dafdir_ujian_praktikum')->insert([
            'id_mahasiswa' => '1',
            'status' => 'h',
        ]);
        DB::table('dafdir_ujian_praktikum')->insert([
            'id_mahasiswa' => '2',
            'status' => 'i',
        ]);
        DB::table('dafdir_ujian_praktikum')->insert([
            'id_mahasiswa' => '3',
            'status' => 'a',
        ]);
    }
}
