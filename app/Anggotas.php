<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggotas extends Model
{
    protected $fillable = ['nrp_anggota', 'nama_anggota', 'email_anggota', 'notelp_anggota', 'biodata_anggota', 'status_anggota', 'berkas_anggota', 'foto_anggota']; 
}
