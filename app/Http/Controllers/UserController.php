<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.users.index');
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
        return redirect()->route('user.create');

    }


}
