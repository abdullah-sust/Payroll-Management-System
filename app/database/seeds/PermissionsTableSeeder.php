<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PermissionsTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
		$permissions = [
			'read'  => 'Read'
		];

		foreach($permissions as $permission_name => $display_name)
		{
			Permission::create([
				'name'          => $permission_name,
				'display_name'  => $display_name
			]);
		}
	}

}