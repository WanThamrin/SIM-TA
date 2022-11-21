<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisTA extends Model
{
    use HasFactory;
    protected $table = 'regis_t_a_s';
    // protected $guarded = [];

    protected $fillable = [
        'id',
        'judul',
        'abstrak',
        'keyword',
        'status1',
        'status2',
        'users_id',
        'dospem1',
        'dospem2',
        'dospeng1',
        'dospeng1'
    ];

/**
 * Get the user that owns the RegisTA
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function user()
{
    return $this->belongsTo(User::class, 'users_id', 'id');
}
}
