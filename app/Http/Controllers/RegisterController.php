<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create') ;
    }

    public function store(UserRequest $request) {

        try {
            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => $request->password
            ]);
            return redirect()->route('login.form')->with('success','User created!');
        } catch( Exception $e ) {
            return back()->withInput()->with('error','User was not created.');
        }
    }

}
