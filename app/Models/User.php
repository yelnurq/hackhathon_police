<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'password',
        'rank',
        'fullname',
        'is_admin', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function cells()
    {
        return $this->belongsToMany(Cell::class, 'cell_user');
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
