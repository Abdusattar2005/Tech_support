<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $data['usersCount']=User::all()->count();
        $data['videosCount']=Video::all()->count();
        $data['categoriesCount']=Category::all()->count();
        return view('admin.main.index', compact('data'));
    }
}