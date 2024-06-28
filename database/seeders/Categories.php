<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['blog', 'faq','product'];
        $faker = \Faker\Factory::create();
        for ($i = 0; $i< 5 ; $i++){
            $type = $types[rand(0,2)];
            Category::create(
               [
                   'name'=>$faker->word,
                   'type'=>$type
               ]
            );
        }
    }
}
