<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Column;
use Illuminate\Database\Seeder;

class ColumnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Column::truncate();
        $tag = Tag::first();
        Column::factory()->hasAttached([
            $tag
        ])->count(10)->create();
    }
}
