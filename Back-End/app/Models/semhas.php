<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semhas extends Model
{
    use HasFactory;
    protected $table = 'semhas';


    protected $fillable = [
        'id',
        // 'nama_mhs',
        // 'nim',
        // 'niph',
        'users_id',
        'ta_id',
        'laporan',
        'bimbingan',
        'validasi_sidang1',
        'validasi_sidang2',
        'validasi_sempro',
        'bukti',

    ];

    /**
     * Get the user that owns the semhas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function TA()
    {
        return $this->belongsTo(RegisTA::class, 'ta_id', 'id');
    }
}
