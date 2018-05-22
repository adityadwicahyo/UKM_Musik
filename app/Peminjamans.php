<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjamans extends Model
{
    protected $fillable = ['id_barang', 'Jumlah_Barang', 'Tanggal_Kembali', 'Nama_Barang', 'Tanggal_Peminjaman', 'NRP_Peminjam', 'Status_Peminjaman'];
}
