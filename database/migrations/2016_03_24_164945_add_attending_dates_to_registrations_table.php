<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttendingDatesToRegistrationsTable extends Migration {

	public function up()
	{
		Schema::table('registrations', function($table)
		{
			$table->string('attending_dates');
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
			$table->dropColumn('attending_dates');
		});
	}

}
