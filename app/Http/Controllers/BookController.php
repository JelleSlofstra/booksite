<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        foreach ($books as $book)
        {
            $book->addWriters();
        }

        return view('books/index',[
            'books' => $books
        ]);
    }

    public function create()
    {
        return view('books/edit');
    }

    public function show(Book $book)
    {
        $book->addWriters();        

        return view('books/show',[
            'book' => $book
        ]);
    }

    public function destroy(Book $book)
    {
        $book->destroy($book->id);
        return redirect('/books');
    }


}
