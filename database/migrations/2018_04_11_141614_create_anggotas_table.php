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
            $table->increments('id');
            $table->timestamps();
            $table->string('nrp_anggota', 14);
            $table->string('nama_anggota');
            $table->string('email_anggota');
            $table->string('notelp_anggota');
            $table->string('biodata_anggota')->nullable();
            $table->string('status_anggota');
            $table->string('berkas_anggota');
            $table->string('foto_anggota');
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
