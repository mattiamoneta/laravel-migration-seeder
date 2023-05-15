<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainCSV extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filepath = __DIR__ . '/trains.csv';
        $retVal = self::migrateCSV($filepath);

        foreach($retVal as $index => $row){

            if($index > 0){
                $train = new Train();
                $train->company = $row[0];
                $train->departure_station = $row[1];
                $train->arrival_station = $row[2];
                $train->departure = $row[3];
                $train->arrival = $row[4];
                $train->train_code = $row[5];
                $train->train_carriage = $row[6];
                $train->in_time = $row[7];
                $train->canceled = $row[8];
                $train->save();
            }



        }

       

    }

    public static function migrateCSV(string $filepath){
        $data = [];

        $file = fopen($filepath, 'rw');

        if($file == false){
            die();
        } else { 
            
            while(($row = fgetcsv($file)) !== false){
                $data[] = $row;
            }

        }

        return $data;
    }
}
