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
            $table->increments('id');
            $table->timestamps();
            $table->string('Judul_Informasi');
            $table->date('Tanggal_Informasi');
            $table->longText('Isi_Informasi');
            $table->string('Gambar_Informasi');
            $table->string('Singkat_Informasi');
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
