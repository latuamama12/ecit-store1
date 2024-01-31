<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function main()
    {
        $books = Book::all();

        return view('books.main', ['books' => $books]);
    }
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    
}

