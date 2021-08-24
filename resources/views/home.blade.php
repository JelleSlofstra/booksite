@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($books as $book)
            <div class="card col-md-2">
                <img src="../{{$book->image_path}}" class="card-img-top" alt="...">
                
                <div class="card-body">
                    <h4 class="card-title">
                        {{$book->title}}
                    </h4>
                    @if (isset($book->subtitle))
                        <h5>{{$book->subtitle}}</h5>
                    @endif 
                    <p>Category: {{$book->category}}</p> 
                    @if (isset($book->series))
                        <p>Series: {{$book->series}}</p>
                    @endif                                                    
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection