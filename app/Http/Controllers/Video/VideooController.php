<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Carbon\Carbon;

class VideooController extends Controller
{
    public function video()
    {
        $videos = Video::paginate(5);
        $randomVideos = Video::get()->random(4);
        return view('main.video', compact('videos', 'randomVideos', 'videos'));
    }

    public function show(Video $video)
    {
        $data = Carbon::parse($video->created_at);

        return view('main.show', compact( 'video','data'));

    }
}
