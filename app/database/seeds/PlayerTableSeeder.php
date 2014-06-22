<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PlayerTableSeeder extends Seeder {

    public function run()
    {

        Eloquent::unguard();

        $faker = Faker::create();

        Player::truncate();

        for($x = 1; $x < 26; $x++)
        {
            foreach(range(1, 20) as $subindex)
            {
                Player::create([
                    'user_id' => $x,
                    'player_name' => $faker->name,
                    'player_position' => 'power foward',
                    'player_age' => rand(17,42),
                    'player_overall' => rand(30,99),
                    'player_fitness' => rand(30,99)
                ]);
            }
        }
    }

}