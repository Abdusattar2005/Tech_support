<?php

namespace App\Http\Controllers\Video\Like;

use App\Http\Controllers\Controller;
use App\Models\Video;

class StoreController extends Controller
{
    public function store(Video $video, ){

        auth()->user()->likedVideos()->toggle($video->id);

        return redirect()->back();
    }

}
