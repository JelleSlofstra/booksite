@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Series page</h1>
        <ul>
            @foreach ($series as $serie)
                <li><a href="{{route('series.show', $serie->id)}}">{{$serie->name}}</a>
                    <ul>
                        @foreach ($serie->books as $book)
                        <li><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul> 
    </div>
@endsection('content')