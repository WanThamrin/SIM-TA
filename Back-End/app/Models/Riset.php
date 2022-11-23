<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riset extends Model
{
    use HasFactory;
    protected $table = 'risets';

        protected $fillable = [
        'id',
        'users_id',
        'nama_riset',
        'bidang_riset',
        'keyword',
        'note'
    ];

    /**
     * Get the user that owns the Riset
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
