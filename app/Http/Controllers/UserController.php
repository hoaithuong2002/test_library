<?php

namespace App\Http\Controllers;

use App\Models\Group;
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
        $users = User::all();
        $users = DB::table('users')->paginate(4);
        return view('backend.users.index',compact('users'));
    }

    public function create()
    {
//       $roles=Role::all();
//       $groups=Group::all();
        return view('backend.users.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index');

    }

    public function update($id)
    {
        $user= User::find($id);
        return view('backend.users.edit',compact('user'));
    }

    public function edit($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user.index');
    }
    function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function search(Request $request)
    {
        $search = $request->keyword;
        $users = DB::table('users')->where('name', 'LIKE', "%$search%")->paginate(4);
        return view('back-end.user.index', compact('users'));
    }

}
