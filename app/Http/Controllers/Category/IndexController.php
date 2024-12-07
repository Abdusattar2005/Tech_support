<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
       return view('category.index', compact('categories'));
    }

}






//        $relatedVideos = Video::where('category_id', $video->category_id)
//            ->where('id', '!=', $video->id)->get()->take(3);
//        compact('video', 'data', 'relatedVideos')
