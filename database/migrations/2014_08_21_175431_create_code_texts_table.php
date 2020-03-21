<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('codes', function($table)
		{
			$table->dropColumn('instructions');
		});

        Schema::create('code_texts', function ($table) {
	        $table->increments('id');
	        $table->integer('code_id');
	        $table->string('language_code');
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
		Schema::dropIfExists('code_texts');

		Schema::table('codes', function($table)
		{
			$table->text('instructions');
		});

	}

}
