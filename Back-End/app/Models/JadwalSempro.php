<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSempro extends Model
{
    use HasFactory;
    protected $table = 'jadwal_sempros';


    protected $fillable = [
        'id',
        // 'nama_mhs',
        // 'nim',
        // 'niph',
        'users_id',
        'hari',
        'jam_mulai',
        'jam-akhir',
        // 'dospeng1',
        // 'dospeng2',
        'type',
        'ruangan'
    ];

    /**
     * Get the user that owns the JadwalSempro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
