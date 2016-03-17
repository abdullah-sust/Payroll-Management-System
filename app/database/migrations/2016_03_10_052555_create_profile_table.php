<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')
									->on('users')
									->onDelete('cascade')
									->onUpdate('cascade');
									
			$table->string('first_name');
			$table->string('last_name');
			$table->bigInteger('national_id')->unique();
			$table->string('sex');
			$table->string('blood_group');
			$table->string('birth_date');
			$table->string('marital_status');
			$table->string('phone');
			$table->string('photo');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
