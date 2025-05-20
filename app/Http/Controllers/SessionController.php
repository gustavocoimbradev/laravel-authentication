<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function check() {
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        } else {
             return redirect()->route('login.form');
        }
    }
}
