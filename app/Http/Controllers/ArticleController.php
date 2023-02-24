<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): View
    {
      $articles = Article::with('authors')->orderBy('created_at', 'desc');
      return view('article.index')->with('articles', $articles);
    }
}
