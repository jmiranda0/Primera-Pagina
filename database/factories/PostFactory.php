<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Models\Post>
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
            //
            'title' => fake()->name()." ".fake()->name(),
            'content' => fake()->sentence(),
            'image' => "/img/".fake()->name(),
            'authors_id' => fake()->randomNumber(1,6),
            'classifications_id' => fake()->randomNumber(1,6)
        ];
    }
}
