<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Foto_Kegiatan');
            $table->string('Nama_Kegiatan', 100);
            $table->date('Tanggal_Kegiatan');
            $table->time('Waktu_Kegiatan');
            $table->date('Batas_Tanggal_Kegiatan');
            $table->time('Batas_Waktu_Kegiatan');
            $table->string('Deskripsi_Kegiatan', 500);
            $table->string('Tipe_Kegiatan', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
}
