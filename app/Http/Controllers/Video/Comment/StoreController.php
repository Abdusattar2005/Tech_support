<?php

namespace App\Http\Controllers\Video\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Video;

class StoreController extends Controller
{
public function store(Video $video, StoreRequest $request){
    $data = $request->validated();
    $data['user_id'] = auth()->user()->id;
    $data['video_id'] = $video->id;
    Comment::create($data);
    return redirect()->route('main.show', $video->id);
}
}
