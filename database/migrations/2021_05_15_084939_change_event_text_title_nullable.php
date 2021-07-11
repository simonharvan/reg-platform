<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeEventTextTitleNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('event_texts', function (Blueprint $table) {
		    $table->string('title')->nullable()->change();
		    $table->string('registration_note')->nullable()->change();
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
		    $table->string('title')->change();
		    $table->string('registration_note')->change();
	    });
    }
}
