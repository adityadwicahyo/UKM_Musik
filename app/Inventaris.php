<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
	protected $primaryKey = 'ID_Inventaris';

    protected $fillable = ['Nama_Inventaris', 'Foto_Inventaris', 'Deskripsi_Inventaris', 'Jumlah_Inventaris'];
}
