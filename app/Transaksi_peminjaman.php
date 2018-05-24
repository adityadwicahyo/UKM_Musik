<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_peminjaman extends Model
{
    protected $fillable = ['ID_Peminjaman', 'ID_Inventaris'];

    // public function peminjaman(){
    // 	// return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    // 	return $this->hasOne('App\Peminjamans', 'ID_Peminjaman', 'ID_Peminjaman');
    // }
}
