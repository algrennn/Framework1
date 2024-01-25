<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Membandingkan peran tanpa memperhatikan perbedaan kapitalisasi
            if (strcasecmp($user->role, 'admin')) {
                return redirect()->intended('/showGuru');
            } else {
                return redirect()->intended('/showSiswa');
            }
        }
        
        
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}