<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_Sempro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'judul',
        'keyword',
        'file',
        // 'status',
        // 'hari',?
        // 'jam',
    ];
}
