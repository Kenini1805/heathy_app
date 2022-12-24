<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        $tags = [
            ['name' => '魚料理'],
            ['name' => '和食'],
            ['name' => 'DHA'],
        ];

        return Tag::insert($tags);
    }
}
