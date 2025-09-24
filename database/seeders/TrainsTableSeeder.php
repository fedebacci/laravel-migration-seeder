<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

// import per i faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {

        // # Senza i faker
        // $trains = [
        //     [
        //         "agency" => "Trenitalia",
        //         "departure_station" => "Roma",
        //         "arrival_station" => "Milano",
        //         "departure_time" => "2025-09-24 14:30:00",
        //         "arrival_time" => "2025-09-24 18:30:00",
        //         "train_code" => "TR1234",
        //         "carriages" => 8,
        //         "in_time" => true,
        //         "deleted" => false,
        //     ],
        //     [
        //         "agency" => "Italo",
        //         "departure_station" => "Napoli",
        //         "arrival_station" => "Torino",
        //         "departure_time" => "2025-09-25 09:00:00",
        //         "arrival_time" => "2025-09-25 15:00:00",
        //         "train_code" => "IT5678",
        //         "carriages" => 10,
        //         "in_time" => false,
        //         "deleted" => false,
        //     ],
        //     [
        //         "agency" => "Frecciarossa",
        //         "departure_station" => "Firenze",
        //         "arrival_station" => "Venezia",
        //         "departure_time" => "2025-09-26 12:15:00",
        //         "arrival_time" => "2025-09-26 14:45:00",
        //         "train_code" => "FR9101",
        //         "carriages" => 6,
        //         "in_time" => true,
        //         "deleted" => false,
        //     ],
        //     [
        //         "agency" => "Trenord",
        //         "departure_station" => "Bergamo",
        //         "arrival_station" => "Como",
        //         "departure_time" => "2025-09-27 08:30:00",
        //         "arrival_time" => "2025-09-27 10:00:00",
        //         "train_code" => "TN1122",
        //         "carriages" => 4,
        //         "in_time" => true,
        //         "deleted" => false,
        //     ],
        //     [
        //         "agency" => "SNCF",
        //         "departure_station" => "Turin",
        //         "arrival_station" => "Lyon",
        //         "departure_time" => "2025-09-28 07:45:00",
        //         "arrival_time" => "2025-09-28 11:15:00",
        //         "train_code" => "SC3344",
        //         "carriages" => 12,
        //         "in_time" => false,
        //         "deleted" => false,
        //     ]
        // ];


        // foreach ($trains as $train) {
        //     $newTrain = new Train();

        //     $newTrain->agency = $train["agency"];
        //     $newTrain->departure_station = $train["departure_station"];
        //     $newTrain->arrival_station = $train["arrival_station"];
        //     $newTrain->departure_time = $train["departure_time"];
        //     $newTrain->arrival_time = $train["arrival_time"];
        //     $newTrain->train_code = $train["train_code"];
        //     $newTrain->carriages = $train["carriages"];
        //     $newTrain->in_time = $train["in_time"];
        //     $newTrain->deleted = $train["deleted"];

        //     $newTrain->save();
        // }


        // # Con i faker
        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();

            $newTrain->agency = $faker->randomElement(["Trenitalia", "Italo", "Frecciarossa", "Trenord", "SNCF"]);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 month', '+2 months');
            $newTrain->arrival_time = $faker->dateTimeBetween($newTrain->departure_time, '+2 months');
            $newTrain->train_code = strtoupper($faker->bothify('??####'));
            $newTrain->carriages = $faker->numberBetween(3, 15);
            $newTrain->in_time = $faker->boolean(80); // 80% di probabilità di essere in orario
            $newTrain->deleted = $faker->boolean(5); // 5% di probabilità di essere cancellato

            $newTrain->save();
        }
    }
}