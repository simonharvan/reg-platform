<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdditionalFieldsNullable2 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('registrations', function (Blueprint $table) {
			$table->string('additional_field_5')->nullable()->change();
			$table->string('additional_field_6')->nullable()->change();
			$table->string('additional_field_7')->nullable()->change();
			$table->string('additional_field_8')->nullable()->change();
			$table->string('additional_field_9')->nullable()->change();
			$table->string('additional_field_10')->nullable()->change();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('event_texts', function (Blueprint $table) {
			$table->string('additional_field_5')->change();
			$table->string('additional_field_6')->change();
			$table->string('additional_field_7')->change();
			$table->string('additional_field_8')->change();
			$table->string('additional_field_9')->change();
			$table->string('additional_field_10')->change();
		});
	}
}
