<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
    public function index(Category $category)
    {
        $videos = $category->videos()->paginate(6);
        return view('category.post.index', compact('videos'));
    }

}
