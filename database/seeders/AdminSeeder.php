<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Admin::where('email', 'admin@gmail.com')->exists()) {
            return;
        }

        Admin::create([
            'name' => "admin",
            'phone' => "1234567",
            'email' => 'admin@gmail.com',
            'password' => Hash::make("password"),
        ]);
    }
}
