<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{Post, User, Category};
>>>>>>> windows
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Post::factory(1000)->create();
=======
        $users = User::all();
        $categories = Category::all();
        $posts = Post::factory(1000)->make();
        foreach ($posts as $post) {
            $post->user_id = $users->random()->id;
            $post->category_id = $categories->random()->id;
            $post->save();
        }
>>>>>>> windows
    }
}
