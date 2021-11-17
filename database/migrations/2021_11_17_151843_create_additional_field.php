<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalField extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table( 'registrations', function ( Blueprint $table ) {
			$table->text( 'additional_field_5' );
			$table->text( 'additional_field_6' );
			$table->text( 'additional_field_7' );
			$table->text( 'additional_field_8' );
			$table->text( 'additional_field_9' );
			$table->text( 'additional_field_10' );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'registrations', function ( Blueprint $table ) {
			$table->dropColumn( 'additional_field_5' );
			$table->dropColumn( 'additional_field_6' );
			$table->dropColumn( 'additional_field_7' );
			$table->dropColumn( 'additional_field_8' );
			$table->dropColumn( 'additional_field_9' );
			$table->dropColumn( 'additional_field_10' );
		} );
	}
}
