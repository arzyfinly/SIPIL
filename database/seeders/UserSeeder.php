<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'alexanderpato@gmail.com',
            'role' => 'admin',
            'password'=> Hash::make('alex123'),
        ]);
        DB::table('users')->insert([
            'role' => 'mahasiswa',
            'email' => 'ragarigot3@gmail.com',
            'password'=> Hash::make('raga123'),
        ]);
        DB::table('users')->insert([
            'role' => 'mahasiswa',
            'email' => 'andy@gmail.com',
            'password'=> Hash::make('andy123'),
        ]);
        DB::table('users')->insert([
            'role' => 'mahasiswa',
            'email' => 'coba1@gmail.com',
            'password'=> Hash::make('coba1'),
        ]);
    }
}
