<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
       return redirect()->route('admin.main.index');
    }
}
