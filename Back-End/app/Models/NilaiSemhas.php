<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSemhas extends Model
{
    use HasFactory;
    protected $table = 'nilai_semhas';


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
     * Get the user that owns the semhas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}

