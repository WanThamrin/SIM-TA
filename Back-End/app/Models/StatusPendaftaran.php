<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPendaftaran extends Model
{
    use HasFactory;
    protected $table = 'status_pendaftarans';

        protected $fillable = [
        'id',
        'type',
        'status'
    ];
}
