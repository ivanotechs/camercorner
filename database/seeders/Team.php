<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teams;
use Faker\Factory as Faker;

class Team extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Teams::create([
                'image' => $faker->imageUrl(640, 480, 'sports', true, 'Faker'),
                'name' => $faker->company,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
