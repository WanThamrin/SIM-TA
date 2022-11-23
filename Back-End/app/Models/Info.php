<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'judul',
        'keyword',
        'file',
        'note',
        'time'
        // 'status',
        // 'hari',
        // 'jam',
    ];
}
