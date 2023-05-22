<?php

namespace Database\Seeders;

use App\Models\Vine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class VineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newVine = new Vine();

            $newVine->nome = $faker->word();
            $newVine->descrizione = $faker->paragraph();

            $newVine->save();
        }
    }
}
