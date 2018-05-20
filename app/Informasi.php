<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $fillable = ['Judul_Informasi', 'Singkat_Informasi', 'Tanggal_Informasi', 'Isi_Informasi', 'Gambar_Informasi'];
}
