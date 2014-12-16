<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SocialNetworkUsersTableSeeder extends Seeder {

	public function run()
	{
		// lets add some us users
		$faker = Faker::create('en_US');

		foreach(range(1, 50) as $index)
		{
			SocialNetworkUser::create([
				'first_name' => $faker->firstName,
                'second_name' => $faker->lastName,
                'age' => $faker->randomDigitNotNull,
                'date_of_birth' => $faker->date
			]);
		}
	}

}