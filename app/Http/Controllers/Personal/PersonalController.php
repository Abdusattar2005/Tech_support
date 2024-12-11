<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Dislike;
use App\Models\VideoUserLike;

class PersonalController extends Controller
{
    public function index()
    {
        $data=[];
        $data['likesCount']=VideoUserLike::all()->count();
        $data['dislikesCount']=Dislike::all()->count();
        $data['commentsCount']=Comment::all()->count();
        return view('personal.main.index', compact('data'));
    }

}
