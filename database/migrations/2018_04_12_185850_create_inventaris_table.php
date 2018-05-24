<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->increments('ID_Inventaris');
            $table->timestamps();
            $table->string('Nama_Inventaris', 200);
            $table->longText('Foto_Inventaris');
            $table->string('Deskripsi_Inventaris', 200);
            $table->integer('Jumlah_Inventaris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
