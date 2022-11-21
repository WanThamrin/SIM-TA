<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';


    protected $fillable = [
        // 'id',
        'users_id',
        'status',
        'waktu',
        'foto',
        // 'judul',
        // 'abstrak',
        // 'keyword',
        // 'dospem1',
        // 'dospem2'
    ];

    /**
     * Get the user that owns the Mahasiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
