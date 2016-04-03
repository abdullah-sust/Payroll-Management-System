<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RewardTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$users = User::all();
		foreach($users as $index)
		{
			Reward::create([
				'user_id' =>$index->id,
				'fine' => 0.00,
				'extra_pay' => 0.00
			]);
		}
	}

}