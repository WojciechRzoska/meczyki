<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//API Endpoints from task
Route::get('/articles/{id}', [ArticleController::class, 'show']);
Route::get('/authors/{id}/articles', [ArticleController::class, 'getArticlesByAuthor']);
Route::get('/authors/top', [ArticleController::class, 'topAuthorsLastWeek']);
