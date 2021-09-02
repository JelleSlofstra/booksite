@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($books as $book)
                @include('books.partials.card')                                                  
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection('content')