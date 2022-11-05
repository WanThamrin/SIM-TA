<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisTA extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_mhs',
        'nim',
        'niph',
        'judul',
        'abstrak',
        'keyword',
        // 'dospem1',
        // 'dospem2'
    ];
}
