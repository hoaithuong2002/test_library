<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all();
        $libraries = DB::table('libraries')->paginate(4);
        return view('backend.library.list',compact('libraries'));
    }

    public function create()
    {

        return view('backend.library.create');
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

    public function edit($id ,Request $request)
    {
        $library = Library::find($id);
        $library->name = $request->name;
        $library->phone= $request->phone;
        $library->address= $request->address;
        $library->avatar = $request->avatar;
        $library->save();
        return redirect()->route('library.index');
    }

    public function delete($id)
    {
        $library = Library::find($id);
        $library->delete();
        return redirect()->route('library.index');
    }

    public function search(Request $request)
    {
        $search = $request->keyword;
        $libraries = DB::table('libraries')->where('name', 'LIKE', "%$search%")->paginate(4);
        return view('backend.library.list', compact('libraries'));
    }
}
