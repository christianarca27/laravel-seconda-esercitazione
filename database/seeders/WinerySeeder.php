<?php

namespace Database\Seeders;

use App\Models\Winery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class WinerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newWinery = new Winery();

            $newWinery->nome = $faker->company();
            $newWinery->indirizzo = $faker->streetAddress();
            $newWinery->comune = $faker->city();
            $newWinery->provincia = $faker->word();
            $newWinery->regione = $faker->word();
            $newWinery->nazione = $faker->country();
            $newWinery->telefono = $faker->phoneNumber();
            $newWinery->email = $faker->email();

            $newWinery->save();
        }
    }
}
