@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card col-md-3">
                <img src="..{{$book->image_path}}" class="card-img-top" alt="...">
                
                <div class="card-body">
                    <h4 class="card-title">
                        {{$book->title}}
                    </h4>
                    @if (isset($book->subtitle))
                        <h5>{{$book->subtitle}}</h5>
                    @endif 
                    Written by:
                    <ul>
                        @foreach ($book->writers as $writer)
                            <li>{{$writer}}</li>
                        @endforeach
                    </ul>                    
                    <p>Category: {{$book->category}}</p> 
                    @if (isset($book->series))
                        <p>Part of the '{{$book->series}}' series.</p>
                    @endif
                    <div>
                        <a href="{{route('books.index')}}">go Back</a>
                    </div>
                    <form action="{{route('books.destroy', $book->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                                                                     
                </div>
            </div>
    </div>
</div>
@endsection