<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatans extends Model
{
	protected $primaryKey = 'ID_Kegiatan';

    protected $fillable = ['Foto_Kegiatan','Nama_Kegiatan', 'Tanggal_Kegiatan', 'Waktu_Kegiatan', 'Batas_Tanggal_Kegiatan', 'Batas_Waktu_Kegiatan', 'Deskripsi_Kegiatan', 'Tipe_Kegiatan'];
}
