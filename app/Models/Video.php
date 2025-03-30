<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['user_id', 'video_path', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function responses()
    {
        return $this->hasMany(VideoResponse::class);
    }
}
