<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SeasonGameTableSeeder extends Seeder {

	public function run()
	{
        Eloquent::unguard();

		$faker = Faker::create();

		for($x = 1; $x < 11; $x++)
        {
            foreach(range(1, 10) as $index)
            {
                if($x !== $index)
                {
                    SeasonGame::create([
                        'season_id' => $x,
                        'home_team' => $x,
                        'away_team' => $index,
                    ]);
                }
            }
        }
	}

}