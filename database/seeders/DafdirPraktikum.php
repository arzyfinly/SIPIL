<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DafdirPraktikum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dafdir_praktikum')->insert([
            'id_mahasiswa' => '1',
            'kelompok' => '1',
            'status' => 'h',
        ]);
        
        DB::table('dafdir_praktikum')->insert([
            'kelompok' => '1',
            'status' => 'i',
        ]);
        
        DB::table('dafdir_praktikum')->insert([
            'kelompok' => '2',
            'status' => 'a',
        ]);
    }
}
