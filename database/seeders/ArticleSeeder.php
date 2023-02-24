<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();

        $articlesCount = [2, 1]; // Number of articles to create for each author

        foreach ($authors as $key => $author) {
            $count = $articlesCount[$key] ?? 0;

            Article::factory()
                ->count($count)
                ->create()
                ->each(function ($article) use ($author) {
                    $article->authors()->attach($author);
                });
        }
    }
}
