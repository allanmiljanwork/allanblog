<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{Comment, Post, User};

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $posts = Post::all();
        foreach ($posts as $post) {
            $comments = Comment::factory(rand(0, 10))->make();
            foreach ($comments as $comment) {
                $comment->user_id = $users->random()->id;
                $comment->post_id = $post->id;
                $comment->save();
            }
        }
    }
}