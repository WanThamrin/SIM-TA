<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sempro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_mhs',
        'nim',
        'niph',
        'proposal',
        'slide',
        'validasi_dospem1',
        'validasi_dospem2'
    ];
}
