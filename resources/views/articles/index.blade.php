@extends('layouts.main')

@section('content')
<h1>All Articles</h1>
<a href="{{ route('articles.create') }}">Add Article</a>
        @foreach($articles as $article)
            <div class="card mt-3 mb-3">
                <h2>{{ $article->title }}</h2>
                <td>Created: {{ $article->creation_date }}</td> 

                <div class="card-body mt-3 mb-3">{{$article->text}}</div>
                <div>                            
                    @foreach($article->authors as $author)
                        {{ $author->name }}
                    @endforeach 
                </div>
                <td>Created: {{ $article->creation_date }}</td> 
                <a class='btn btn-danger btn-sm col-1' href="{{ route('articles.edit', $article->id) }}">Edit</a>
            </div>
        @endforeach
@endsection