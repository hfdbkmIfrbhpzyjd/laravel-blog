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
    public function definition()
    {
        $title = $this->faker->realText(rand(10, 40));
        $short_title = mb_strlen($title) > 30 ? mb_substr($title, 0, 30) . '...' : $title;
        $created = $this->faker->dateTimeBetween('-30 days', '-1 days');

        return [
            'title' => $title,
            'short_title' => $short_title,
            'author_id' => rand(1, 4),
            'descr' => $this->faker->realText(rand(100, 500)),
            'created_at' => $created,
            'updated_at' => $created,
        ];
    }
}
