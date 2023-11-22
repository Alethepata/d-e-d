<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;
use Faker\Generator as Faker;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i) {

            $character = new Character();
            $character->name = $faker->words(2, true);
            $character->height = $faker->numberBetween(0, 999);
            $character->wheight = $faker->numberBetween(0, 9999);
            $character->background = $faker->text();
            $character->image = $faker->text();
        }
    }
}
