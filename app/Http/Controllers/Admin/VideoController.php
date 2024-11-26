<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        return view('main.video');
    }

}
