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
        Book::create(request()->all());
        
        return redirect('/');
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
            'action'    => route('books.update', $book),
            'method'    => 'PATCH',
            'series'    => Series::all(),
            'categories'=> Category::all()
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect("/books/$book->id");
    }

    public function destroy(Book $book)
    {
        $book->destroy($book->id);
        return redirect('/');
    }


}
