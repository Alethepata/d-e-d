<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Race;
use Faker\Generator as Faker;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $new_race = new Race();
            $new_race->name = $faker->word();
            $new_race->description = $faker->paragraph();
            $new_race->mod_for = $faker->numberBetween(-3, 3);
            $new_race->mod_des = $faker->numberBetween(-3, 3);
            $new_race->mod_cos = $faker->numberBetween(-3, 3);
            $new_race->mod_int = $faker->numberBetween(-3, 3);
            $new_race->mod_sag = $faker->numberBetween(-3, 3);
            $new_race->mod_car = $faker->numberBetween(-3, 3);

            $new_race->save();
        }
    }
}
