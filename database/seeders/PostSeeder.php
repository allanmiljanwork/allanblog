<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{Post, User};
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $posts = Post::factory(1000)->make();
        foreach ($posts as $post) {
            $post->user_id = $users->random()->id;
            $post->save();
        }
    }
}
