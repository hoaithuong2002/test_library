<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showLogin()
    {
        if (!Auth::check()){
            return view('layouts.pages.login');
        }
        return redirect()->route('user.index');
    }
    function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $email=$request->email;
        $password= $request->password;
        $data= [
            'email'=>$email,
            'password'=>$password
        ];
        if (Auth::attempt($data)) {
            return redirect()->intended('/admin/index');
        }
        return back()->withErrors([
            'login-error' => 'Tài khoản hoặc mật khẩu không đúng!',

        ]);
//            return redirect()->route('user.index');

    }
    function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
    function formRegister()
    {
        return view('layouts.pages.register');
    }

    function register(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
//        dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->avatar = $request->avatar;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('admin.login');
    }


}



