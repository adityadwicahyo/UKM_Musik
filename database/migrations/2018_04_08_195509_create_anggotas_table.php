<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->timestamps();
            $table->string('nrp_anggota', 20);
            $table->string('password_anggota', 20);
            $table->string('nama_anggota', 100);
            $table->char('jurusan_id', 36);
            $table->string('email_anggota', 100);
            $table->string('notelp_anggota', 100);
            $table->string('biodata_anggota', 200);
            $table->string('foto_anggota');
            $table->string('status_anggota', 200);
            $table->string('berkas_anggota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
