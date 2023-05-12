<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<50; $i++){

            
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->word();
            $train->arrival_station = $faker->word();
            $train->departure = $faker->date('Y-m-d') . " " . $faker->time('H-i-s');
            $train->arrival = $faker->date('Y-m-d') . " " . $faker->time('H-i-s');
            $train->train_code = $faker->randomNumber(5, true);
            $train->train_carriage = $faker->randomDigitNotNull();
            $train->in_time = $faker->randomDigit();
            $train->canceled = $faker->randomDigit();
            $train->save();
        }
    }
}
