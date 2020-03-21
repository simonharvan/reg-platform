<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegistrationFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('registrations', function($table)
		{
			$table->string('delegation_name');
			$table->string('category');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('registrations', function($table)
		{
			$table->dropColumn('delegation_name');
			$table->dropColumn('category');
		});
	}

}
