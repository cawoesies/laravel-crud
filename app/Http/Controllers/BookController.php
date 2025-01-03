<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    // Menampilkan form tambah buku
    public function create()
    {
        return view('book.create');
    }

    // Menyimpan buku baru
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        Book::create($validasi);
        return redirect()->route('book.index')->with('success', 'Book created successfully!');
    }

    // Menampilkan form edit buku
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', compact('book'));
    }

    // Mengupdate data buku
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        $book = Book::findOrFail($id);
        $book->update($validasi);
        return redirect()->route('book.index')->with('success', 'Book updated successfully!');
    }

    // Menghapus buku
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('book.index')->with('success', 'Book deleted successfully!');
    }
}
