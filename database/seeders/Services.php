<?php

namespace Database\Seeders;

use App\Models\Service;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


class Services extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $services = [
            'Online Consultation',
            'Home Consultation',
            'Medication Dispensing & Delivery',
            'Medication Monitoring & Adherence',
            'Health Education Workshop',
            'Rewards Program Referreals',
            'Drug information request'
        ];

        foreach ($services as $service) {
            Service::create([
                'title' => $service,
                'description' => $faker->paragraph,
                'image' => $faker->imageUrl(640, 480, 'sports', true, 'Faker'),
                'icon' => 'images/icons8_cash_in_hand.png',
            ]);
        }
    }
}
