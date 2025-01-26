<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "location_id" => 1,
                "category_id" => 1,
                "name" => "Premium Haircut",
                "duration" => 30,
                "price" => 40000
            ],
            [
                "location_id" => 1,
                "category_id" => 1,
                "name" => "Haircut & Hair Treatment",
                "duration" => 45,
                "price" => 50000
            ],
            [
                "location_id" => 1,
                "category_id" => 2,
                "name" => "Premium Facial Treatment",
                "duration" => 45,
                "price" => 45000
            ],
            [
                "location_id" => 1,
                "category_id" => 2,
                "name" => "Facial Treatment + Massage",
                "duration" => 60,
                "price" => 65000
            ],
            [
                "location_id" => 1,
                "category_id" => 3,
                "name" => "Nail Art",
                "duration" => 30,
                "price" => 45000
            ],
            [
                "location_id" => 2,
                "category_id" => 1,
                "name" => "Premium Haircut",
                "duration" => 30,
                "price" => 40000
            ],
            [
                "location_id" => 2,
                "category_id" => 1,
                "name" => "Haircut & Hair Treatment",
                "duration" => 45,
                "price" => 50000
            ],
            [
                "location_id" => 2,
                "category_id" => 2,
                "name" => "Premium Facial Treatment",
                "duration" => 45,
                "price" => 45000
            ],
            [
                "location_id" => 2,
                "category_id" => 2,
                "name" => "Facial Treatment + Massage",
                "duration" => 60,
                "price" => 65000
            ],
            [
                "location_id" => 2,
                "category_id" => 3,
                "name" => "Nail Art",
                "duration" => 30,
                "price" => 45000
            ]
        ];

        foreach ($data as $item) {
            Treatment::create($item);
        }
    }
}
