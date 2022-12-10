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
        'jam_akhir',
        'type',
        'ruangan'
    ];

    /**
     * Get the user that owns the JadwalSempro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }


}
