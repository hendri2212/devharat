<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word(10);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->text(200),
            'image' => null,
            'user_id' => null,
        ];
    }
}
