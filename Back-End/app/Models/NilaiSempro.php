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
        'sempros_id',
        'dosen_id',
        'nilai1',
        'nilai2',
        'nilai3',
        'nilai4',
        'nilai5',
        'nilai_presentasi',
        'nilai_laporan',
        'note',

    ];

    /**
     * Get the user that owns the sempro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sempro()
    {
        return $this->belongsTo(sempro::class, 'sempros_id', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id', 'id');
    }
}
