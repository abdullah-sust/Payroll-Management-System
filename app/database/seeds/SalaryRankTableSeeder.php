<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SalaryRankTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			SalaryRank::create([
				'rank' => $index,
				'basic' => 100000/$index,
				'bonus' => 5,
				'created_at' => $faker->dateTime($max ='now'),
				'updated_at' => $faker->dateTime($max ='now')
			]);
		}
	}

}