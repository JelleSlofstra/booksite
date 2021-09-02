@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('books.partials.card')
                    <div>
                        <a href="{{route('books.index')}}">go Back</a>
                    </div>
                    <div>
                        <a href="{{route('books.edit', $book)}}">Edit this book</a>
                    </div>
                    <form action="{{route('books.destroy', $book)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                                                                     
                </div>
            </div>
    </div>
</div>
@endsection