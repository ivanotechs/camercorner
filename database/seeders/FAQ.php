<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class FAQ extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        foreach (Category::where('type','faq')->get() as $category) {
            for ($i = 0; $i < 5; $i++) {
                \App\Models\FAQ::create(
                    [
                        'question' => $faker->text . "?",
                        'answer' => $faker->text,
                        'category_id'=>$category->id
                    ]
                );
            }
        }
    }
}
