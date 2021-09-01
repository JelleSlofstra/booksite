<form action="{{$action}}" method="POST">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="subtitle" placeholder="subtitle">
    <input type="text" name="category" placeholder="category">
    <input type="text" name="series" placeholder="series">
    @if (isset($method))
        @method('{{$method}}')
    @endif
    @csrf
    <button type="submit" class="btn btn-primary">Submit form</button>
</form>