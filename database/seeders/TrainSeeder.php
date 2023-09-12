<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->agency = fake()->words(3, true);
            $train->departure_station = fake()->words(5, true);
            $train->arrival_station = fake()->words(5, true);
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time();
            $train->carriage_number = fake()->numberBetween(100, 200);
            $train->in_time = rand(0, 1);
            $train->delete = rand(0, 1);
            $train->save();
        }
    }
}

