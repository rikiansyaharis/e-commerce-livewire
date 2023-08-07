<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function login() {
        $data = [
            'title' => 'Login'
        ];
        return view('auth.login', $data);
    }

    public function getLogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('apps.dashboard');
        } else {
            return redirect()->route('auth.login')->with('failed', 'Wrong username or password');
        }
    }

    public function register() {
        $data = [
            'title' => 'Register'
        ];

        return view('auth.register', $data);
    }

    public function getRegister(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
        ]);

        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::create($request->only(['name', 'email', 'password']));


        Auth::login($user, true);
        event(new Registered($user));
        return redirect()->route('auth.login')->with('success', 'your account has been created');

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('homepage')->with('success', 'you are logout');

    }
}
