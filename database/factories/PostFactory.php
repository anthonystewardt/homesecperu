<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        $published = $this->faker->randomElement([true, false]);
        $published_at = $published ? now() : null;
        return [
            "title" => fake()->name(),
            "slug" => fake()->slug(),
            "extract" => fake()->text(200),
            "body" => fake()->text(2000),
            "published" => $published,
            "category_id" => Category::all()->random()->id,
            "image_path" => $this->faker->imageUrl(1280, 720),
            "user_id" => User::all()->random()->id,
            "published_at" => $published_at,

        ];
    }
}