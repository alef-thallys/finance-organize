<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return inertia('Register');
    }

    public function store(StoreRegisterRequest $request)
    {
        $attributes = $request->validated();
        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);
        return redirect('/');
    }
}
