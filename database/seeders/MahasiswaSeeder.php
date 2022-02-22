<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'alexander pato',
            'email' => 'alexanderpato@gmail.com',
            'nim' => '71951112',
            'alamat' => 'Jl. Perdana, Sumenep',
            'tgl_lahir' => '2001-05-24',
            'tmpt_lahir' => 'Sumenep',
            'no_hp' => '081913678701',
            'gender' => 'Laki - Laki',
        ]);
        DB::table('mahasiswa')->insert([
            'nama' => 'Muhammad Bagus Raga Maulidi',
            'email' => 'ragarigot3@gmail.com',
            'nim' => '71951123',
            'alamat' => 'Jl. Kh. Wahid Hasyim GG 11',
            'tgl_lahir' => '2001-05-24',
            'tmpt_lahir' => 'Sumenep',
            'no_hp' => '081913678701',
            'gender' => 'Laki - Laki',
        ]);
    }
}
