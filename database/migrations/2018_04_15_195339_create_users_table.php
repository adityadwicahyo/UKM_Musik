<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('ID_Mahasiswa');
            $table->timestamps();
            $table->rememberToken();
            $table->string('Nama_Mahasiswa', 100);
            $table->string('NRP_Mahasiswa', 20);
            $table->string('Email_Mahasiswa', 100);
            $table->string('No_telp_Mahasiswa', 100);
            $table->string('Biodata_Mahasiswa', 200)->nullable();
            $table->string('Status_Mahasiswa', 200);
            $table->longText('Berkas_Mahasiswa');
            $table->string('password', 255);
            $table->longText('Foto_Mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
