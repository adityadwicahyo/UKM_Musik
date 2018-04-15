<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjamans extends Model
{
    protected $fillable = ['Jumlah_Barang', 'Tanggal_Kembali', 'Nama_Barang', 'Tanggal_Peminjaman', 'NRP_Peminjam'];
}
