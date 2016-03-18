<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProfileTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$user = User::all();
		foreach($user as $index)
		{
			
			Profile::create([
				'user_id' =>$index->id,
				'first_name' => $faker->firstNameMale ,
				'last_name' => $faker->lastName ,
				'national_id' => $faker->numberBetween($min = 10001, $max = 99999),
				'sex' => 'male',
				'blood_group' => 'AB+',
				'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'marital_status' => 'Unmarried',
				'phone'     => $faker->phoneNumber,
				'photo'     => 'uploads/image/defaultAvatar.png',
				'created_at' => $faker->dateTime($max ='now'),
				'updated_at' => $faker->dateTime($max ='now')
			]);
		}
	}

}