<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;

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
        for ($i=0; $i<10; $i++){
            $train = new Train();
            $train->azienda=$faker->word();
            $train->stazione_partenza=$faker->word();
            $train->stazione_arrivo=$faker->word();
            $train->orario_partenza=$faker->dateTimeThisMonth();
            $train->orario_arrivo=$faker->dateTimeThisMonth();
            $train->codice_treno=$faker->word();
            $train->numero_carrozze=$faker->numberBetween(1, 15);
            $train->in_orario=$faker->boolean();
            $train->cancellato=$faker->boolean();

            $train->save();


        }
    }
}
