<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanBimbingan extends Model
{
    use HasFactory;
    protected $table = 'beban_bimbingans';

    protected $fillable = [
        'id',
        'mata_kuliah',
        'catatan',
        'users_id'
    ];

    /**
     * Get the user that owns the BebanBimbingan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
