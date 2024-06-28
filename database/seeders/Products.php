<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Faker\Factory as Faker;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach(Category::where('type','product')->get() as $category){
            for ($i = 0; $i < 3; $i++) {
                Product::create([
                   'image' => $faker->imageUrl(640, 480, 'cat', true, 'Faker'),
                   'name' => $faker->company,
                   'description' => $faker->paragraph,
                   'category_id' => $category->id, // Assuming you have a category with ID 1
                   'price' => '500',
                ]);
            }
        }
    }
}
