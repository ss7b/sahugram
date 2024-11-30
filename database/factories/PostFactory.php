<?php

namespace Database\Factories;
use Illuminate\Support\Str;
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
        $images = ['pic-1.jpg','pic-2.jpg','pic-3.jpg','pic-4.jpg','pic-5.jpg'];
        return [
            'description' => fake()->sentence(),
            'slug' => Str::limit(fake()->regexify('[A-za-z0-9]{20}'), 10),
            'image' => 'posts/' . fake()->randomElement($images),
            'user_id' => User::factory(),
        ];
    }
}
