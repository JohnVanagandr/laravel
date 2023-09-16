<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('user', compact('user'));
    }

    public function update(UserUpdateRequest $request)
    {
        dd($request->all());
    }
}
