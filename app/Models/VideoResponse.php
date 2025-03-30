<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_id',
        'admin_id',
        'response',
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
