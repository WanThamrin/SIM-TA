<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSempro extends Model
{
    use HasFactory;
    protected $table = 'nilai_sempros';


    protected $fillable = [
        'id',
        // 'nama_mhs',
        // 'nim',
        // 'niph',
        'users_id',
        'nilai1',
        'nilai2',
        'nilai3',
        'nilai4',
        'nilai5',
        'note',

    ];

    /**
     * Get the user that owns the sempro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
