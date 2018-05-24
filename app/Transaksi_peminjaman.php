<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi_peminjaman extends Model
{
    protected $fillable = ['ID_Peminjaman', 'ID_Inventaris'];
}
