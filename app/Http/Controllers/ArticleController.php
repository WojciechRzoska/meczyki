<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(): View
    {
      $articles = Article::with('authors')->get();
      return view('articles.index')->with('articles', $articles);
    }

    public function create(): View
    {
        $authors = Author::all();
        return view('articles.create', compact('authors'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'author_id' => 'required'
        ]);
    
        $article = new Article();
        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->creation_date = Carbon::now();
        $article->save();
    
        $author = Author::find($request->input('author_id'));
        $author->articles()->attach($article);
    
        return redirect()->route('articles.index');
    }

    public function edit($id): View
    {
        $article = Article::findOrFail($id);
        $authors = Author::all();
    
        return view('articles.edit', compact('article', 'authors'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $article = Article::findOrFail($id);
    
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
            'author_id' => 'required|exists:authors,id',
        ]);
    
        $article->title = $validatedData['title'];
        $article->text = $validatedData['text'];
        $article->save();
        
        $article->authors()->sync([$request->input('author_id')]);
    
        return redirect()->route('articles.index');
    }
    










    
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return response()->json($article);
    }
    public function getArticlesByAuthor($authorId)
    {
        $author = Author::findOrFail($authorId);
        $articles = $author->articles()->get();
        return response()->json($articles);
    }

    public function topAuthorsLastWeek()
    {
        $authors = Author::withCount(['articles' => function ($query) {
            $query->where('creation_date', '>=', Carbon::now()->subWeek());
        }])->orderByDesc('articles_count')->get();

        return response()->json($authors);
        
    }
}
