<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index()
    {
       return view('main.index');
    }

}






//        $relatedVideos = Video::where('category_id', $video->category_id)
//            ->where('id', '!=', $video->id)->get()->take(3);
//        compact('video', 'data', 'relatedVideos')
