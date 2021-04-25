<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index()
    {
        $library = Library::all();
        $library = DB::table('library')->paginate(4);
        return view('backend.library.list',compact('library'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $library = new Library();
        $library->name = $request->name;
        $library->phone= $request->phone;
        $library->address= $request->address;
        $library->avatar = $request->avatar;
        $library->save();
        return redirect()->route('library.index');
    }

    public function update($id)
    {
        $library = Library::find($id);
        return view('backend.library.edit',compact('library'));
    }
}
