<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdditionalFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::table('registrations', function (Blueprint $table) {
			$table->string('additional_field')->nullable()->change();
			$table->string('additional_field_2')->nullable()->change();
			$table->string('additional_field_3')->nullable()->change();
			$table->string('additional_field_4')->nullable()->change();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('registrations', function (Blueprint $table) {
			$table->string('additional_field')->change();
			$table->string('additional_field_2')->change();
			$table->string('additional_field_3')->change();
			$table->string('additional_field_4')->change();
		});
	}
}
