<?php

namespace App\Http\Controllers\Video\Dislike;

use App\Http\Controllers\Controller;
use App\Models\Video;

class StoreController extends Controller
{
    public function store(Video $video, ){

        auth()->user()->DisLikedVideos()->toggle($video->id);

        return redirect()->back();
    }

}
