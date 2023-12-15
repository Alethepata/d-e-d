<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;
use Faker\Generator as Faker;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $skills = ['FOR', 'DES', 'COS', 'INT', 'SAG', 'CAR'];

        foreach ($skills as $skill) {
            $new_skill = new Skill();
            $new_skill->name = $faker->word();
            $new_skill->description = $faker->paragraph();
            $new_skill->skill = $skill;

            $new_skill->save();
        }
    }
}
