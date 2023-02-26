@extends('layouts.main')

@section('content')
<h1>Edit Article</h1>
<form method="POST" action="{{ route('articles.update', $article->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
    </div>
    <div class="form-group">
        <label for="text">Text:</label>
        <textarea class="form-control" id="text" name="text" rows="5">{{ $article->text }}</textarea>
    </div>
    <div class="form-group">
        <label for="authors">Authors:</label>
        <select  class="form-control" id="author_id" name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">
                    {{ $author->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary col-1">Save</button>
</form>
@endsection