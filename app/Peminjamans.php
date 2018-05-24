<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjamans extends Model
{
	protected $primaryKey = 'ID_Peminjaman';

    protected $fillable = ['ID_Mahasiswa', 'Jumlah_Barang', 'Tanggal_Kembali', 'Tanggal_Peminjaman', 'Status_Peminjaman'];
}
