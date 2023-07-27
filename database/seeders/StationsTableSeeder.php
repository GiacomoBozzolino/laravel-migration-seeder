<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;

use App\Models\Station;



class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++){
            $station = new Station();
            $station->name=$faker->word();
            $station->city=$faker->word();
            $station->n_track=$faker->numberBetween(1, 15);
            $station->baggage_check=$faker->boolean();
            
            $station->save();
        }
    }
}
