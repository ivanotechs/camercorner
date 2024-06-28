<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          $this->call(AdminSeeder::class);
          $this->call(Categories::class);
          $this->call(Testimonials::class);
          $this->call(Team::class);
          $this->call(FAQ::class);
          $this->call(Services::class);
         $this->call(Blog::class);
        $this->call(Products::class);
    }
}
