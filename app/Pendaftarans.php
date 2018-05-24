<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftarans extends Model
{
	protected $primaryKey = 'ID_Pendaftaran';

    protected $fillable = ['ID_Kegiatan', 'Berkas_Pendaftar', 'ID_Mahasiswa']; 
}
