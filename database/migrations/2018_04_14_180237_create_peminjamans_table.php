<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->increments('ID_Peminjaman');
            $table->timestamps();
            $table->integer('ID_Mahasiswa');
            $table->integer('ID_Inventaris');
            $table->integer('Jumlah_Barang');
            $table->date('Tanggal_Peminjaman');
            $table->date('Tanggal_Kembali');
            $table->string('Status_Peminjaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamans');
    }
}
