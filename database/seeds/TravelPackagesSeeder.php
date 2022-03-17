<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\TravelPackage as TravelPackage;

class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        
        for ($i = 0; $i < 10; $i++) {
            $travelPackage = new TravelPackage();
            $travelPackage->nome_pacchetto = $faker->text(50);
            $travelPackage->luogo_partenza = $faker->text(50);
            $travelPackage->partenza = $faker->text(50);
            $travelPackage->luogo_destinazione = $faker->text(50);
            $travelPackage->n_partecipanti_attuali = $faker->text(50);
            $travelPackage->partenza = $faker->text(50);
            $travelPackage->costo = $faker->text(50);
            $travelPackage->descrizione = $faker->text(255);

            $travelPackage->save();
        }
    }
}
