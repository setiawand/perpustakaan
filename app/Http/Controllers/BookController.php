<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function save(Request $req)
    {
        $data = $req->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'cover' => 'mimes:jpg,png'
        ]);

        if ($req->file('cover')) {
            $path_cover = $req->cover->store('public');
        } else {
            $path_cover = "public/default.jpg";
        }

        $data['cover'] = str_replace("public/", "", $path_cover);

        Book::create($data);

        return redirect('books')->with('success', 'Buku berhasil di buat');
    }

    public function edit(Book $book, Request $req)
    {
        dd($book);
    }
}
