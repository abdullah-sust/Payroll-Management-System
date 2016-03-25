<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
					[
								'email'      => 'mrsiddiki@gmail.com',
								'password'   => Hash::make('a'),
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'email'      => 'abdullahalawal177@gmail.com',
								'password'   => Hash::make('a'),
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],

		];

		DB::table('users')->insert($users);

		$faker = Faker::create();
		for ($i=1; $i < 199; $i++) {
		
			User::create([
				'EmployeeID' => 100100+$i,
				'email'  =>$faker->email,
				'password' => $faker->password,
				'created_at' => $faker->dateTime($max ='now'),
				'updated_at' => $faker->dateTime($max ='now')
			]);
		}
	}

}