<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TeamsTableSeeder extends Seeder {

	public function run()
	{
        Eloquent::unguard();

		$faker = Faker::create();

		foreach(range(1, 26) as $index)
		{
            $arenaId = Arena::orderBy(DB::raw('RAND()'))->first()->id;

			Team::create([
                'user_id' => $index,
                'team_name' => $faker->name,
                'team_wins' => rand(0,32),
                'team_loses' => rand(0,32),
                'team_arena' => $arenaId,
                'team_chemistry' => rand(0,100)
			]);
		}
	}

}