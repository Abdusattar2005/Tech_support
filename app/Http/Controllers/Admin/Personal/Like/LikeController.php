<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;
use App\Models\Video;

class LikeController extends Controller
{
    public function index()
    {
        $videos = auth()->user()->LikedVideos;
        return view('personal.liked.index', compact('videos'));
    }
    public function delete( Video $video )
    {
        auth()->user()->LikedVideos()->detach($video);
        return redirect()->route('personal.liked.index');
    }
}
