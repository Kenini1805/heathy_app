<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Diary;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::first()->id,
            'meal_id' => rand(1, 4),
            'meal_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'meal_time' => $this->faker->date($format = 'H:i:s', $max = 'now'),
            'content' => $this->faker->paragraph(),  
            'thumbnail' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
