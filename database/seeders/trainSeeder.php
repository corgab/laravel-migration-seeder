<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    { 

        for ($i = 0; $i < 100; $i++) {

            $company = ['Trenitalia', 'Italo', 'Trenord', 'Ferrotramviaria'];
            $stazione_partenza = [
                'Roma Termini',
                'Milano Centrale',
                'Napoli Centrale',
                'Firenze Santa Maria Novella',
                'Torino Porta Nuova'
            ];
            $stazione_arrivo = [
                'Bologna Centrale',
                'Venezia Santa Lucia',
                'Palermo Centrale',
                'Genova Piazza Principe',
                'Verona Porta Nuova',
            ];

            $interval_hours = $faker->numberBetween(1, 6);
            $orario_partenza_random = $faker->dateTimeBetween('now', '+3 month')->format('Y-m-d H:i:s');

            $in_orario = $faker->boolean();
            $cancellato = $in_orario ? false : $faker->boolean() ;  // se il treno è in orario non puo essere cancellato

            $new_train = new train();

            $new_train->azienda = $faker->randomElement($company);
            $new_train->stazione_partenza = $faker->randomElement($stazione_partenza);
            $new_train->stazione_arrivo = $faker->randomElement($stazione_arrivo);
            $new_train->orario_partenza = $orario_partenza_random;
            $new_train->orario_arrivo = $faker->dateTimeInInterval($orario_partenza_random, "+$interval_hours hours");
            $new_train->codice_treno = $faker->unique()->bothify('??-######');
            $new_train->numero_carrozze = $faker->numberBetween(1,10);
            $new_train->in_orario = $in_orario;
            $new_train->cancellato = $cancellato;

            $new_train->save();
        }

    }
}
