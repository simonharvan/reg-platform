<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstructionsForCodesTable extends Migration {

	public function up()
	{

		Schema::table('events', function($table)
		{
			$table->dropColumn('instructions');
		});


		Schema::table('codes', function($table)
		{
			$table->text('instructions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('codes', function($table)
		{
			$table->dropColumn('instructions');
		});
		Schema::table('events', function($table)
		{
			$table->text('instructions');
		});
	}

}
