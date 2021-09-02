<form action="{{$action}}" method="POST">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="subtitle" placeholder="subtitle">
    <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->category}}</option>
        @endforeach
    </select>
    <select name="series_id">
        <option value="">not part of a series</option>
        @foreach ($series as $serie)
        <option value="{{$serie->id}}">{{$serie->name}}</option>
        @endforeach
    </select>
    @if (isset($method))
        @method('{{$method}}')
    @endif
    @csrf
    <button type="submit" class="btn btn-primary">Submit form</button>
</form>