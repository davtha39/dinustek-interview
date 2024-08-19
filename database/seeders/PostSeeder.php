<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Postt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $category = Category::create(['nme' => 'Laravel']);
        $post = Postt::create([
            'title' => 'Belajar Laravel',
            'content' => 'Laravel adalah framework PHP.'
        ]);
        $Post->categories()->attach($category->id);
    }
}
