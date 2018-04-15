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
            $table->increments('id');
            $table->timestamps();
            $table->string('NRP_Peminjam', 14);
            $table->string('Nama_Barang', 200);
            $table->integer('Jumlah_Barang');
            $table->date('Tanggal_Peminjaman');
            $table->date('Tanggal_Kembali');
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
