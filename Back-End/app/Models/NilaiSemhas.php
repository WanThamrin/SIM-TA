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
        'Semhas_id',
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
    public function semhas()
    {
        return $this->belongsTo(semhas::class, 'semhas_id', 'id');
    }
}

