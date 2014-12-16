<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSimpleSocialNetworkUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('simple_social_network_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 45)->nullable();
			$table->string('second_name', 45)->nullable();
			$table->string('age', 45)->nullable();
			$table->date('date_of_birth')->nullable();
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
		Schema::drop('simple_social_network_users');
	}

}
