<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Модель Cell
class Cell extends Model
{
    protected $fillable = ['name', 'max_users'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'cell_user');
    }

    public function userCount()
    {
        return $this->users()->count();
    }

    public function hasSpace()
    {
        return $this->userCount() < $this->max_users;
    }
}
