<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FriendsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $users = SocialNetworkUser::all(); // this will generate an array of ids

		foreach(range(1, 100) as $index)
		{
			$user = $users->random(1);
			$other_user = $users->random(1);
			$friend = new Friend(array('friend_id' => $other_user->id));
			$friend = $user->friends()->save($friend);
		}
	}

}

