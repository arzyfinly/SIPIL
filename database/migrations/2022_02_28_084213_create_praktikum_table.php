<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraktikumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praktikum', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('alamat');
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir');
            $table->string('no_hp');
            $table->string('prasyarat');
            $table->string('ikut_praktikum');
            $table->string('kelas');
            $table->string('jumlah pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praktikum');
    }
}
