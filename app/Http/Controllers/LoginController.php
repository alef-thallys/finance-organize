<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return inertia('Login');
    }

    public function authenticate(AuthenticateLoginRequest $request)
    {
        $attributes = $request->validated();

        if (Auth::attempt($attributes)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
