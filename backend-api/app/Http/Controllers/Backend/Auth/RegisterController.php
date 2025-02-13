<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('backend.auth.register');
    }

    public function handleRegister(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);
        return redirect()->route('admin.home');
    }
}
