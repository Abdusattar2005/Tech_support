<?php

namespace App\Http\Controllers\Video\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Video;

class StoreController extends Controller
{
    public function store(Video $video, ){

        auth()->user()->likedVideos()->toggle($video->id);

        return redirect()->back();
    }

}
