<?php

namespace App\Http\Controllers\Statica;

use App\Http\Controllers\Controller;
use App\Models\Dislike;
use App\Models\User;
use App\Models\Video;
use App\Models\VideoUserLike;


class StaticController extends Controller
{
    public function index(User $user)
    {
        $videos = Video::all();
        return view('static.index', compact('user', 'videos'));
    }

    public function show(Video $video)
    {

        $likesCount = VideoUserLike::select('likes_date')->orderBy('likes_date')->get();
        $dislikesCount = Dislike::count();
        $months = [
            'Январь',
            'Фебраль',
            'Март',
            'Апрель',
            'Май',
            'Июнь',
            'Июль',
            'Августь',
            'Сентябрь',
            'Октябрь',
            'Ноябрь',
            'Декабрь',
        ];

        $data = Video::select('views_date', 'views', 'category_id')
            ->orderBy('views_date')
            ->get();
        return view('static.main.show', ['data' => $data,], compact('video', 'months', 'likesCount', 'dislikesCount'));
    }
}
