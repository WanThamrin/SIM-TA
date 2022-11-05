<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riset extends Model
{
    use HasFactory;

        protected $fillable = [
        'id',
        'nama_riset',
        'bidang_riset',
        'keyword',
        'note'
    ];
}
