<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'Sławomir Peszko']);
        Author::create(['name' => 'Robert Lewandowski']);
        Author::create(['name' => 'Tomasz Hajto']);
    }
}
