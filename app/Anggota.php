<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class Anggota extends Model
{
    protected $fillabel = ['nrp_anggota', 'password_anggota', 'nama_anggota', 'email_anggota', 'notelp_anggota', 'biodata_anggota', 'foto_anggota', 'status_anggota', 'berkas_anggota'];

    protected $hidden = ['password_anggota', 'remember_token'
    ];
}
