@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($books as $book)
            <div class="card col-md-3">
                <img src="..{{$book->image_path}}" class="card-img-top" alt="...">
                
                <div class="card-body">                    
                    <h4 class="card-title">
                        <a href="{{route('books.show',$book)}}">{{$book->title}}</a>                        
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
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection