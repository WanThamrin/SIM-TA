<?php

namespace App\Models;



use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'number',
        'email',
        'password',
        'phone',
        'is_admin',
        'is_superadmin',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bimbingan()
    {
        return $this->hasMany(BebanBimbingan::class, 'users_id','id');
    }

    public function riset()
    {
        return $this->hasMany(Riset::class,  'users_id','id');
    }

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function TA()
    {
        return $this->belongsTo(RegisTA::class, 'users_id', 'id');
    }

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function JadwalSempro()
    {
        return $this->belongsTo(JadwalSempro::class, 'id', 'users_id');
    }

    public function JadwalSemhas()
    {
        return $this->belongsTo(JadwalSemhas::class, 'id', 'users_id');
    }


}
