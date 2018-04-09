<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id_anggota');
            $table->timestamps();
            $table->string('nrp_anggota', 20)->unique();
            $table->string('password_anggota', 20);
            $table->string('nama_anggota', 100);
            $table->string('email_anggota', 100)->unique();
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
        Schema::dropIfExists('anggota');
    }
}
