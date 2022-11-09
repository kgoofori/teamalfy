<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
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

        $data = $request->only(['name', 'dob', 'email', 'username', 'phone', 'dial_code']);
        $data['password'] = $password;

        if ($request->photo) {
            $path = 'images/' . Str::random(15) . '.jpg';
            $imagePath =  Storage::disk('public')->path($path);
            Image::make($request->photo)->save($imagePath, 100, 'jpg');

            $data['photo_url'] = Storage::url($path);
            $data['photo_path'] = $imagePath;

        }

        $user = User::create( $data);

        Auth::login($user);

        if ($request->expectsJson()) {
            return ['message' => "Successful"];
        }

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

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid username or password');
    }
}
