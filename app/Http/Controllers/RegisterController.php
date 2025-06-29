<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function store(UserRequest $request)
    {
        try {
            User::create($request->validate([
                'name'      => 'required|string|max:255',
                'email'     => 'required|email|max:255',
                'password'  => 'required|string|min:6'
            ]));
            return redirect('/login')->with('success', 'User created!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', 'User was not created.');
        }
    }
}
