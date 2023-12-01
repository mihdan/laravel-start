<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()
                ->inRandomOrder()
                ->first()
                ->value('id'),
            'thumbnail' => $this->faker->imageUrl(640,480, null, false),
            'title' => ucfirst($this->faker->words(4, true)),
            'description' => $this->faker->words(10, true),
            'content' => $this->faker->text(),
            'source' => $this->faker->url(),
        ];
    }
}
