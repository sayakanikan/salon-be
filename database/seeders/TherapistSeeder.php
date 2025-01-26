<?php

namespace Database\Seeders;

use App\Models\Therapist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TherapistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Location 1
            [
                "location_id" => 1,
                "treatment_id" => 1,
                "name" => "Sandy A.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 1,
                "treatment_id" => 1,
                "name" => "Sandy W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 1,
                "treatment_id" => 1,
                "name" => "Sandy S.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 1,
                "treatment_id" => 2,
                "name" => "Awang S.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 1,
                "treatment_id" => 2,
                "name" => "Awang W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 1,
                "treatment_id" => 2,
                "name" => "Awang P.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 1,
                "treatment_id" => 3,
                "name" => "Dudung S.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 1,
                "treatment_id" => 3,
                "name" => "Dudung W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 1,
                "treatment_id" => 3,
                "name" => "Dudung A.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 1,
                "treatment_id" => 4,
                "name" => "Mamat T.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 1,
                "treatment_id" => 4,
                "name" => "Mamat W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 1,
                "treatment_id" => 4,
                "name" => "Mamat A.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 1,
                "treatment_id" => 5,
                "name" => "Ahmad T.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 1,
                "treatment_id" => 5,
                "name" => "Ahmad D.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 1,
                "treatment_id" => 5,
                "name" => "Ahmad A.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],

            // Location 2
            [
                "location_id" => 2,
                "treatment_id" => 6,
                "name" => "Sandy A.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 2,
                "treatment_id" => 6,
                "name" => "Sandy W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 2,
                "treatment_id" => 6,
                "name" => "Sandy S.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 2,
                "treatment_id" => 7,
                "name" => "Awang S.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 2,
                "treatment_id" => 7,
                "name" => "Awang W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 2,
                "treatment_id" => 7,
                "name" => "Awang P.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 2,
                "treatment_id" => 8,
                "name" => "Dudung S.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 2,
                "treatment_id" => 8,
                "name" => "Dudung W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 2,
                "treatment_id" => 8,
                "name" => "Dudung A.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 2,
                "treatment_id" => 9,
                "name" => "Mamat T.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 2,
                "treatment_id" => 9,
                "name" => "Mamat W.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 2,
                "treatment_id" => 9,
                "name" => "Mamat A.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
            [
                "location_id" => 2,
                "treatment_id" => 10,
                "name" => "Ahmad T.",
                "fee" => 25000,
                "rating" => 5.0,
                "total_treatment" => 120
            ],
            [
                "location_id" => 2,
                "treatment_id" => 10,
                "name" => "Ahmad D.",
                "fee" => 20000,
                "rating" => 4.9,
                "total_treatment" => 90
            ],
            [
                "location_id" => 2,
                "treatment_id" => 10,
                "name" => "Ahmad A.",
                "fee" => 15000,
                "rating" => 4.7,
                "total_treatment" => 50
            ],
        ];

        foreach ($data as $item) {
            Therapist::create($item);
        }
    }
}
