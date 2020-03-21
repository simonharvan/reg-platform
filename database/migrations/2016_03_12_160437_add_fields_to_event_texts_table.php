<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToEventTextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::table('event_texts', function($table)
		{
			$table->dropColumn('name');
			$table->dropColumn('language_code');
		});

		Schema::table('event_texts', function($table)
		{
	        $table->string('language_code');
			$table->text('travel_data_note');
			$table->text('room_additional_number_night_help');
			$table->text('confirmation_text');
			$table->text('email_subject');
			$table->text('email_confirmation_text');
			$table->text('email_please_review');
			$table->text('email_signature');
			$table->text('email_registration_details');
			$table->text('email_hotel_nonsponsored');
			$table->text('email_questionnaire');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('event_texts', function($table)
		{
			$table->dropColumn('language_code');
			$table->dropColumn('travel_data_note');
			$table->dropColumn('room_additional_number_night_help');
			$table->dropColumn('confirmation_text');
			$table->dropColumn('email_subject');
			$table->dropColumn('email_confirmation_text');
			$table->dropColumn('email_please_review');
			$table->dropColumn('email_signature');
			$table->dropColumn('email_registration_details');
			$table->dropColumn('email_hotel_nonsponsored');
			$table->dropColumn('email_questionnaire');
		});

		Schema::table('event_texts', function($table)
		{

	        $table->string('name');
	        $table->integer('language_code');

		});
	}

}
