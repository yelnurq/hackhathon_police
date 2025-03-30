<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|file|mimes:mp4,avi,mkv|max:102400',
            'description' => 'required|string|max:100000',
        ]);

        $path = $request->file('video')->store('videos', 'public');

        Video::create([
            'user_id' => Auth::id(),
            'video_path' => $path,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Видео успешно загружено!');
    }

    public function index()
    {
        if (Auth::user()->is_admin) {
            $videos = Video::with('user')->get(); 
        } else {
            $videos = Auth::user()->videos()->with('user')->get(); 
        }
    
        return view('videos.index', compact('videos'));
    }
    
    
    public function create()
    {
        return view('videos.create');
    }
    public function show($id)
    {
        $video = Video::with('user')->findOrFail($id);
    
        if ($video->user_id !== Auth::id() && !Auth::user()->is_admin) {
            abort(403, 'У вас нет доступа к этому видео.');
        }
    
        return view('videos.show', compact('video'));
    }
    
}
