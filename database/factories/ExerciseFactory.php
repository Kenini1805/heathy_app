<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::first()->id,
            'name' => $this->faker->title(),
            'kcal' => rand(1, 1000),
            'time' => rand(1, 1000),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
