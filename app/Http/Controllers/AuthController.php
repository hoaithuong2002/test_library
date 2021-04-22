<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        if (!Auth::check()){
            return view('layouts.pages.login');
        }
        return redirect()->route('user.index');
    }
    function login(Request $request){
        $email=$request->email;
        $password= $request->password;
        $data= [
            'email'=>$email,
            'password'=>$password
        ];
        if (!Auth::attempt($data)) {
            return redirect()->route('admin.login')->with('login-error', 'Tài khoản hoặc mật khẩu không đúng!');
        } else {
            return redirect()->route('user.index');
        }
    }
    function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }


}



