@extends('layouts.main')

@section('content')
<h1>Add Article</h1>
<form method="POST" action="{{ route('articles.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="text">Text:</label>
        <textarea name="text" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="author">Author:</label>
        <select name="author_id" class="form-control">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Submit</button>
</form>
@endsection