<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Blogs;
use Faker\Factory as Faker;
use Carbon\Carbon;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();



        foreach (Category::where('type','blog')->get() as $category) {


        for ($i = 0; $i < 6; $i++) {
            Blogs::create([
                'title' => $faker->company,
                'description' => $faker->paragraph,
                'image' => $faker->imageUrl(640, 480, 'cat', true, 'Faker'),
              'category_id' => $category->id, // Assuming you have a category with ID 1
            'type' => 'text',
            'path' => $faker->randomElement([null, 'https://www.youtube.com/watch?v=' . $faker->regexify('[A-Za-z0-9]{10}')]),
            'posted_by' => $faker->numberBetween(1, 3), // Assuming you have an admin with ID 1
            ]);
        }
    }
}
}
