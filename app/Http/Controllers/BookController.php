<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->paginate(4);
        return view('backend.books.list', compact('books'));
    }

    public function create()
    {
        return view('backend.books.list');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $book = new Book();
        $book->name = $request->name;
        $book->avatar = $book->name . '_' . $book->id . '_avt.' . ($request->avatar)->extension();
        $book->save();

        ($request->avatar)->storeAs('public/avatar', $book->avatar);
        $book->status = $request->status;
        $book->description = $request->description;
        $book->save();
        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('backend.books.edit', compact('book'));
    }

    public function update($id, Request $request)
    {
        $book= Book::find($id);
        $book->name = $request->name;
        $book->avatar = $book->name . '_' . $book->id . '_avt.' . ($request->avatar)->extension();
        $book->save();

        ($request->avatar)->storeAs('public/avatar', $book->avatar);
        $book->status = $request->status;
        $book->description = $request->description;
        $book->save();
        return redirect()->route('book.index');
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index');
    }

    public function  search(Request $request)
    {
        $search = $request->keyword;
        $books = DB::table('books')->where('name', 'LIKE', "%$search%")->paginate(4);
        return view('backend.books.list', compact('books'));
    }
}
