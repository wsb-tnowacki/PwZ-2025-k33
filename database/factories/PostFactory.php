<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        return [
            'tytul' => fake('pl_PL')->sentence(fake()->numberBetween(2,7)),
            'autor' => fake('pl_PL')->name(),
            'email' => fake('pl_PL')->freeEmail(),
            'tresc' => fake('pl_PL')->text(),
            'created_at' => fake()->dateTime(),
        ];
    }
}
