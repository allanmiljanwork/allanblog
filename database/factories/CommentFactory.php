<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comment;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $created = fake()->dateTimeBetween();
        $updated = fake()->dateTimeBetween($created);

        return [
            'body' => fake()->sentences(3, true),
            'created_at' => $created,
            'updated_at' => $updated,
        ];
    }
}