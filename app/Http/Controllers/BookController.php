<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        return view('books/index',[
            'books' => Book::all()
        ]);
    }

    public function create()
    {
        return view('books/create',[
            'action'    => route('books.store'),
            'series'    => Series::all(),
            'categories'=> Category::all()
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
