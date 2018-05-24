<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'ID_Mahasiswa';

    protected $fillable = [
        'Nama_Mahasiswa', 'NRP_Mahasiswa', 'password', 'Berkas_Mahasiswa', 'Foto_Mahasiswa', 'Status_Mahasiswa', 'Email_Mahasiswa', 'No_telp_Mahasiswa', 'Biodata_Mahasiswa', 'Berkas_Mahasiswa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
