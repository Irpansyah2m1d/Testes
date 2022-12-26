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
            "body" => $this->faker->paragraph(mt_rand(8, 15)),
            "user_id" => mt_rand(1, 4),
            "category_id" => mt_rand(1,3)
        ];
    }
}
