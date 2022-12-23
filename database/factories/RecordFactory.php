<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecordFactory extends Factory
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
            'weight' => rand(30,200),
            'body_fat' => rand(1,100),
            'record_time' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
