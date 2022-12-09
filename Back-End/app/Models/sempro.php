<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sempro extends Model
{
    use HasFactory;
    protected $table = 'sempros';

    protected $fillable = [
        'id',
        // 'nama_mhs',
        // 'nim',
        // 'niph',
        'users_id',
        'ta_id',
        'proposal',
        'slide',
        'validasi_dospem1',
        'validasi_dospem2'
    ];

    /**
     * Get the user that owns the sempro
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

    public function revisi()
    {
        return $this->HasOne(RevProposal::class, 'users_id', 'users_id');
    }

    public function nilai()
    {
        return $this->HasOne(NilaiSempro::class, 'sempros_id', 'id');
    }

    public function nilais()
    {
        return $this->HasMany(NilaiSempro::class, 'sempros_id', 'id');
    }

}
