<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
		$roles = Config::get('customConfig.roles');

		foreach($roles as $role)
		{
			Role::create([
				'name' => $role
			]);
		}
	}

}