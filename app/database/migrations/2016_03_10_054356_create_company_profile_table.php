<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_profile', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')
									->on('users')
									->onDelete('cascade')
									->onUpdate('cascade');

			$table->integer('rank_id')->unsigned();
			$table->foreign('rank_id')->references('id')
									->on('salary_rank')
									// ->onDelete('cascade')
									->onUpdate('cascade');

			$table->string('join_date');
			$table->integer('designation_id')->unsigned();
			$table->foreign('designation_id')->references('id')
											->on('designation')
											// ->onDelete('cascade')
											->onUpdate('cascade');

			$table->string('contribution');


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
		Schema::drop('company_profile');
	}

}
