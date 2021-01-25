<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(50)
            ->create()
            ->each(function ($post) {
                $comments = Comment::factory()->count(2)->make();
                $post->comments()->saveMany($comments);
            });
    }
}
