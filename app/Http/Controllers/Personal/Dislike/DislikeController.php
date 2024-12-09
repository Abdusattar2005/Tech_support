<?php

namespace App\Http\Controllers\Personal\Dislike;

use App\Http\Controllers\Controller;
use App\Models\Video;

class DislikeController extends Controller
{
    public function index()
    {
        $videos = auth()->user()->DisLikedVideos;
        return view('personal.dislike.index', compact('videos'));
    }
    public function delete( Video $video )
    {

        auth()->user()->DisLikedVideos()->detach($video);
        return redirect()->route('personal.dislike.index');    }
}
