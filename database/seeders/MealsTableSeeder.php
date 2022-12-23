<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::truncate();
        $meals = [
            ['name' => 'Morning'],
            ['name' => 'Lunch'],
            ['name' => 'Dinner'],
            ['name' => 'Snack'],
        ];

        return Meal::insert($meals);
    }
}
