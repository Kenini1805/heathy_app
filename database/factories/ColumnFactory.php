<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ColumnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),  
            'publish_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'content' => $this->faker->paragraph(),  
            'thumbnail' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
