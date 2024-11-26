<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function member_login()
    {
        return view('auth.member_login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard'); // Corrected route name
            } elseif ($user->isMember()) {
                return redirect()->route('member.dashboard');
            }
    
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
