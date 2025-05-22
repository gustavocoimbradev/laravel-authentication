<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function checkSession()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(UserRequest $request)
    {
        try {
            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => $request->password
            ]);
            return redirect('/login')->with('success', 'User created!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'User was not created.');
        }
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withError('The credentials provided are incorrect')->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
