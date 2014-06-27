<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SeasonTableSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Season::create([
                'season_name' => $faker->name
            ]);
        }
    }

}