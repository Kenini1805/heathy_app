<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Record;
use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::truncate();

        $records = [];
        for ($i=1; $i < 13; $i++) { 
            $data = [
                'user_id' => User::first()->id,
                'weight' => rand(30,200),
                'body_fat' => rand(1,100),
                'month' => $i,
                'day' => rand(1, 28),
                'week' => rand(1, 52),
                'year' => date("Y"),
            ];
            $records[] = $data;
        }

        return Record::insert($records);
    }
}
