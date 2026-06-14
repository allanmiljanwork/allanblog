<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Post;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //  $created = fake()->dateTimeBetween();
        // $updated = fake()->dateTimeBetween($created);
        // if(rand(0, 9)){
        //     $updated = $created;
        // }

        $created = fake()->dateTimeBetween();
        $updated = fake()->dateTimeBetween($created);
        return [
            'title' => fake()->sentence,
            'body' => fake()->paragraphs(6, true),
            'created_at' => $created,
            'updated_at' => $updated,
        ];
    }
}
