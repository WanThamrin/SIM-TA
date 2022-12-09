<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevProposal extends Model
{
    use HasFactory;
    protected $table = 'rev_proposals';

    protected $fillable = [
        'id',
        'users_id',
        'note',
        'file'
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

    public function TA()
    {
        return $this->belongsTo(RegisTA::class, 'ta_id', 'id');
    }
}
