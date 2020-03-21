<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPassportAndVisaCopyForRegistrationsTable extends Migration {

	public function up()
	{
		Schema::table('registrations', function($table)
		{
			$table->string('passport_copy');
			$table->string('visa_copy');
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
			$table->dropColumn('passport_copy');
			$table->dropColumn('visa_copy');
		});
	}

}
