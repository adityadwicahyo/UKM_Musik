<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasis', function (Blueprint $table) {
            $table->increments('ID_Informasi');
            $table->timestamps();
            $table->integer('ID_Mahasiswa');
            $table->string('Judul_Informasi', 1024);
            $table->date('Tanggal_Informasi');
            $table->longText('Isi_Informasi');
            $table->string('Gambar_Informasi', 1024);
            $table->string('Singkat_Informasi', 1024);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasis');
    }
}
