<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/add', [ArticleController::class, 'store'])->name('articles.store');


Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');


