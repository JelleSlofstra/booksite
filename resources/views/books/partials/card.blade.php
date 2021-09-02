<div class="card col-md-3">
    <img src="..{{$book->image_path}}" class="card-img-top rounded" alt="...">
    
    <div class="card-body">

        <h3 class="card-title">
        <a href="{{route('books.show',$book)}}">{{$book->title}}</a>
        </h3>

        @if (isset($book->subtitle))
            <h4>{{$book->subtitle}}</h4>
        @endif 

        Written by:
        <ul>
            @foreach ($book->writers as $writer)
                <li><a href="{{route('writers.show', $writer->id)}}">{{$writer->name}}</a></li>
            @endforeach
        </ul> 

        <p>Category: <a href="{{route('categories.show', $book->category_id)}}">{{$book->category->category}}</a></p> 
        
        @if (isset($book->series))
            <p>Part of the '<a href="{{route('series.show', $book->series_id)}}">{{$book->series->name}}</a>' series.</p>
        @endif