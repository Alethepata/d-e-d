<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $characters = config('characters');

        foreach ($characters as $character) {

            $new_character = new Character();
            $new_character->name = $character['name'];
            $new_character->height = $character['height'];
            $new_character->weight = $character['weight'];
            $new_character->background = $character['background'];
            $new_character->image = $character['image'];
            $new_character->armor_class = $character['armor_class'];
            $new_character->for = $character['for'];
            $new_character->des = $character['des'];
            $new_character->cos = $character['cos'];
            $new_character->int = $character['int'];
            $new_character->sag = $character['sag'];
            $new_character->car = $character['car'];
            $new_character->save();
        }
    }
}
