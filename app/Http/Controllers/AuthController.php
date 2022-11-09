<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|alpha_num|unique:users,username|max:255',
            'phone' => 'required|string|unique:users,phone|max:15',
            'password' => [
                'required',
                Password::min(6)->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
            ],
        ]);

        $password = Hash::make($request->password);

        $user = User::create($request->only(['name', 'dob', 'email', 'username', 'phone']) + ['password' => $password]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->firstOrFail();

        if(Hash::check($request->password, $user->password)){
            Auth::login($user);

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid username or password');
    }
}
