<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Majapahit - Semarang",
                "phone" => "082319318421",
                "address" => "Jl. Majapahit no. 127, Semarang",
                "link" => "google.com",
                "wa_status" => false,
                "start_hour" => "08.00",
                "end_hour" => "17.00"
            ],
            [
                "name" => "Papandayan - Semarang",
                "phone" => "082341318213",
                "address" => "Jl. Papandayan no. 28, Semarang",
                "link" => "google.com",
                "wa_status" => false,
                "start_hour" => "08.00",
                "end_hour" => "17.00"
            ]
        ];

        foreach ($data as $item) {
            Location::create($item);
        }
    }
}
