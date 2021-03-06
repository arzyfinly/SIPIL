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
            'first_name' => 'Muhammad Bagus',
            'last_name' => 'Bagus Raga',
            'surename' => 'Raga',
            'id_user' => '2',
            'nim' => '71951123',
            'alamat' => 'Jl. Kh. Wahid Hasyim GG 11',
            'tgl_lahir' => '2001-05-24',
            'tmpt_lahir' => 'Sumenep',
            'no_hp' => '081913678701',
            'gender' => 'Laki - Laki',
        ]);
        DB::table('mahasiswa')->insert([
            'first_name' => 'Andy',
            'last_name' => 'Yulianto',
            'surename' => 'Andy',
            'id_user' => '3',
            'nim' => '71951123',
            'alamat' => 'Jl. Kh. Wahid Hasyim GG 11',
            'tgl_lahir' => '2001-05-24',
            'tmpt_lahir' => 'Sumenep',
            'no_hp' => '081913678701',
            'gender' => 'Laki - Laki',
        ]);
        DB::table('mahasiswa')->insert([
            'first_name' => 'Muhammad Bagus',
            'last_name' => 'Bagus Raga',
            'surename' => 'Raga',
            'id_user' => '4',
            'nim' => '71951123',
            'alamat' => 'Jl. Kh. Wahid Hasyim GG 11',
            'tgl_lahir' => '2001-05-24',
            'tmpt_lahir' => 'Sumenep',
            'no_hp' => '081913678701',
            'gender' => 'Laki - Laki',
        ]);
    }
}
