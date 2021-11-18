<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameRegistrationsAdditionalField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('registrations', function(Blueprint $table) {
		    $table->renameColumn('additional_field', 'additional_field_0');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('registrations', function(Blueprint $table) {
		    $table->renameColumn( 'additional_field_0', 'additional_field' );
	    });
    }
}
