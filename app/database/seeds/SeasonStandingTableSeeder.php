<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SeasonStandingTableSeeder extends Seeder {

	public function run()
	{
        Eloquent::unguard();

		$faker = Faker::create();

         SeasonStanding::create([
                'season_id' => 1,
                'user_id' => 25,
                'games_played' => 18,
                'points' => 40,
                'goals_scored' => 36,
                'goals_scored_on' => 5,
                'wins' => 12,
                'loses' => 2,
                'draws' => 4,
          ]);


        for($x = 2; $x < 11; $x++)
        {
            SeasonStanding::create([
                'season_id' => 1,
                'user_id' => $x,
                'games_played' => rand(0,18),
                'points' => rand(0,54),
                'goals_scored' => rand(0, 50),
                'goals_scored_on' => rand(0,50),
                'wins' => rand(0,18),
                'loses' => rand(0,18),
                'draws' => rand(0,18)
            ]);
        }
	}

}