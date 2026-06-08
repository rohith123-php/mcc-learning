<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if ($request->email === 'alex@gmail.com' && $request->password === '12345') {
            return redirect()->route('student.portal');
        }

        return back()->with('error', 'password wrong');
    }
}
