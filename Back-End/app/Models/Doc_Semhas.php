<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_Semhas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'judul',
        'keyword',
        'file',
        'time'
        // 'status',
        // 'hari',
        // 'jam',
    ];
}
