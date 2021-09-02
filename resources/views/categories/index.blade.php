@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Categories page</h1>
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{route('categories.show', $category->id)}}">{{$category->category}}</a>
                    <ul>
                        @foreach ($category->books as $book)
                        <li><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul> 
    </div>
@endsection('content')