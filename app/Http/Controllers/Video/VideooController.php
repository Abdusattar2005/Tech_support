<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Carbon\Carbon;

class VideooController extends Controller
{
    public function video()
    {
        $videos = Video::paginate(6);
        $randomVideos = Video::get()->random(4);
        $LikedVideos = Video::withCount('LikedUsers')->orderBy('liked_users_count','DESC')->get()->take(4);
        $DisLikedVideos = Video::withCount('DislikedUsers')->orderBy('disliked_users_count','DESC')->get()->take(4);
        return view('main.video', compact('videos', 'randomVideos', 'LikedVideos','DisLikedVideos'));
    }

    public function show(Video $video)
    {
        $data = Carbon::parse($video->created_at);
        $relatedVideos = Video::where('category_id', $video->category_id)
            ->where('id', '!=', $video->id)->get()->take(3);
        $video->increment('views');
        return view('main.show', compact( 'video','data', 'relatedVideos'));
    }
}
