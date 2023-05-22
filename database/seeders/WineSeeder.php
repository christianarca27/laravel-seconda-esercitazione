<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newWine = new Wine();

            $newWine->nome = $faker->word();
            $newWine->annata = $faker->year();
            $newWine->cantina = $faker->company();
            $newWine->colore = $faker->safeColorName();
            $newWine->tipologia = $faker->word();
            $newWine->gradazione = $faker->randomFloat(1, 6, 16);
            $newWine->estratto = $faker->randomFloat(1, 0, 20);
            $newWine->acidita = $faker->randomFloat(1, 4.5, 10);

            $newWine->save();
        }
    }
}
