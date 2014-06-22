<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{

        Eloquent::unguard();

		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			User::create([
                'username' => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make($faker->word)
			]);
		}
	}

}