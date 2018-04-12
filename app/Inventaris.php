<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $fillable = ['nama_inv', 'foto_inv', 'deskripsi_inv', 'status_inv'];
}
