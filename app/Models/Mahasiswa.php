<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'status',
        'waktu',
        'judul',
        'abstrak',
        'keyword',
        // 'dospem1',
        // 'dospem2'
    ];

}
