<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSempro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_mhs',
        'nim',
        'niph',
        'hari',
        'jam_mulai',
        'jam-akhir',
        'dospeng1',
        'dospeng2',
        'type',
        'ruangan'
    ];
}
