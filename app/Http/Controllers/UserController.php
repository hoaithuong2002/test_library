<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users');
        return view('backend.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('backend.users.create', compact('roles'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();

        $user->avatar = $user->name . '_' . $user->id . '_avt.' . ($request->avatar)->extension();
        $user->save();

        ($request->avatar)->storeAs('public/avatar', $user->avatar);
        return redirect()->route('user.index');

    }

    public function update($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('backend.users.edit', compact('user', 'roles'));
    }

    public function edit($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->pasword = $request->password;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->save();
        $user->avatar = $user->name . '_' . $user->id . '_avt.' . ($request->avatar)->extension();
        $user->save();

        ($request->avatar)->storeAs('public/avatar', $user->avatar);
        return redirect()->route('user.index');
    }

    function delete($id): \Illuminate\Http\RedirectResponse
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function search(Request $request)
    {
        $search = $request->keyword;
        $users = DB::table('users')->where('name', 'LIKE', "%$search%");
        return view('back-end.user.index', compact('users'));
    }
}

