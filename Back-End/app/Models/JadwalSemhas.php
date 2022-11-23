<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSemhas extends Model
{
    use HasFactory;
    protected $table = 'jadwal_semhas';


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
     * Get the user that owns the JadwalSemhas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
