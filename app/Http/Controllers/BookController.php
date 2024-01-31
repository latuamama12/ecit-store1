<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('admin.index', ['books' => $books]);
        
        return view('books.main', ['books' => $books]);

    }

    public function cart()
    {
        $books = Book::all();
        return view('books.cart', ['books' => $books]);

    }
/** funziona */

    public function show(Book $book)
    {
        return view('admin.show', ['book' => $book]);
        
    }
    public function show2(Book $book)
    {
        return view('books.show2', ['book' => $book]);
        
    }

  

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $book = new Book();

        $book->titolo = $request->input('titolo');
        $book->descrizione = $request->input('descrizione');
        $book->prezzo = $request->input('prezzo');
        $book->Categoria = $request->input('categoria');

        $book->save();

        return redirect()->route('admin.show', $book->id);
    }

    public function edit(Book $book)
    {
        return view('admin.edit', ['book' => $book]);
    }

    public function update(Book $book, Request $request)
    {
        $book->titolo = $request->input('titolo');
        $book->descrizione = $request->input('descrizione');
        $book->prezzo = $request->input('prezzo');
        $book->categoria = $request->input('categoria');


        $book->update();

        return redirect()->route('admin.show', $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('admin.index');
    }
}
