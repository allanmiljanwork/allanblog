<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{Like, Post, User};

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $posts = Post::all();
        foreach ($posts as $post) {
            $randUsers = $users->random(rand(0, $users->count()));
            foreach ($randUsers as $user) {
                Like::factory()->create(['post_id' => $post->id, 'user_id' => $user->id]);
            }
        }
    }
}
