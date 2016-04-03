<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryRankTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salary_rank', function(Blueprint $table)
		{
			$table->increments('id');
			// $table->integer('user_id')->unsigned();
			// $table->foreign('user_id')->references('id')
			// 						->on('users')
			// 						->onDelete('cascade')
			// 						->onUpdate('cascade')
			// 						->nullable();
									
			$table->integer('rank')->unsigned();
			$table->float('basic', 10, 2)->default(0.00);
			$table->integer('bonus')->default(0);
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
		Schema::drop('salary_rank');
	}

}
