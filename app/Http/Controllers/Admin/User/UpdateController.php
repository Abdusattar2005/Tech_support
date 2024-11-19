<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UpdateController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function update(UpdateRequest $request, User $user)
    {
        $data=$request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
