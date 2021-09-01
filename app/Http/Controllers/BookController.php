<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        foreach ($books as $book)
        {
            $book->addDataToBook();
        }

        return view('books/index',[
            'books' => $books
        ]);
    }

    public function create()
    {
        return view('books/create',[
            'action' => route('books.store')
        ]);
    }

    public function store()
    {
        unset($_POST['_token']);
        $book = new Book;
        $book->setRawAttributes($_POST);
        $book->save();
    }

    public function show(Book $book)
    {
        $book->addDataToBook();        

        return view('books/show',[
            'book' => $book
        ]);
    }

    public function edit(Book $book)
    {
        return view('books/edit', [
            'book'      => $book,
            'action'    => 'books/' . $book . '/update',
            'method'    => 'PUT'
        ]);
    }

    public function update(Book $book)
    {
        dd($_POST);
    }

    public function destroy(Book $book)
    {
        $book->destroy($book->id);
        return redirect('/books');
    }


}
