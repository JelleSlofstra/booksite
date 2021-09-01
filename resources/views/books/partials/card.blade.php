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

        <p>Category: <a href="{{route('categories.show', $book->category_id)}}">{{$book->category}}</a></p> 
        
        @if (isset($book->series))
            <p>Part of the '{{$book->series}}' series.</p>
        @endif