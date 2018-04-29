<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftarans extends Model
{
    protected $fillable = ['Id_Kegiatan', 'NRP_Pendaftar', 'Berkas_Pendaftar']; 
}
