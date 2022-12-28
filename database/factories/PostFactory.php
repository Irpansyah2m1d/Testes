<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Node\Block\Paragraph;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(5, 7)),
            "excerp" => $this->faker->paragraph(),
            "slug" => $this->faker->slug(3),
            "body" => collect($this->faker->paragraphs(mt_rand(8, 12)))->map(fn($p) => "<p>$p</p>")->implode(''),
            "user_id" => mt_rand(1, 4),
            "category_id" => mt_rand(1,3)
        ];
    }
}
