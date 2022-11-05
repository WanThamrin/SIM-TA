<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanBimbingan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'mata_kuliah',
        'catatan'
    ];
}
