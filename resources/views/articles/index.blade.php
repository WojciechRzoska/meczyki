@extends('layouts.main')

@section('content')
<h1>All Articles</h1>
<a href="{{ route('articles.create') }}">Add Article</a>
        @foreach($articles as $article)
            <div>
                <h2>{{ $article->title }}</h2>
                <td>Created: {{ $article->creation_date }}</td> 

                <div>{{$article->text}}</div>
                <div>                            
                    @foreach($article->authors as $author)
                        {{ $author->name }}
                    @endforeach 
                </div>
                <td>Created: {{ $article->creation_date }}</td> 
                <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
            </div>
        @endforeach
@endsection