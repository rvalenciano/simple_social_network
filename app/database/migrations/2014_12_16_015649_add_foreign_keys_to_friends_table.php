<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFriendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('friends', function(Blueprint $table)
		{
			$table->foreign('social_network_user_id', 'fk_friends_users')->references('id')->on('simple_social_network_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('friends', function(Blueprint $table)
		{
			$table->dropForeign('fk_friends_users');
		});
	}

}
