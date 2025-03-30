<?php

namespace App\Http\Controllers;

use App\Models\VideoResponse;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoResponseController extends Controller
{
    // Добавление ответа
    public function store(Request $request, $videoId)
    {
        $request->validate([
            'response' => 'required|string|max:1000',
        ]);

        if (!Auth::user()->isAdmin()) {
            return redirect()->back()->with('error', 'У вас нет прав для ответа на видео.');
        }

        $video = Video::findOrFail($videoId);

        VideoResponse::create([
            'video_id' => $video->id,
            'admin_id' => Auth::id(),
            'response' => $request->response,
        ]);

        return redirect()->back();
    }
}
