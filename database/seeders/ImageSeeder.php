<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{Image, Post};

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            if (rand(0, 9)) {
                Image::factory()->create(['post_id' => $post->id]);
            }
        }
    }
}