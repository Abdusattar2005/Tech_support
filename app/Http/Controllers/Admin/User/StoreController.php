<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;

class StoreController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return redirect()->route('admin.user.index', compact('data'));
    }
}
