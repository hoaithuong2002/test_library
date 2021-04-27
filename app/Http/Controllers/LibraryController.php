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
        $libraries = DB::table('libraries')->paginate(4);
        return view('backend.library.list',compact('libraries'));
    }

    public function create()
    {
        return view('backend.library.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        dd($request->all());
        $library = new Library();
        $library->name = $request->name;
        $library->phone= $request->phone;
        $library->address= $request->address;
        $library->save();
        $library->avatar = $library->name . '_' . $library->id . '_avt.' . ($request->avatar)->extension();
        $library->save();

        ($request->avatar)->storeAs('public/library', $library->avatar);
        return redirect()->route('library.index');
    }

    public function edit($id)
    {
        $library = Library::find($id);
        return view('backend.library.edit',compact('library'));
    }

    public function update($id ,Request $request)
    {
        $library = Library::find($id);
        $library->name = $request->name;
        $library->phone= $request->phone;
        $library->address= $request->address;
        $library->save();
        $library->avatar = $library->name . '_' . $library->id . '_avt.' . ($request->avatar)->extension();
        $library->save();

        ($request->avatar)->storeAs('public/library', $library->avatar);
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
