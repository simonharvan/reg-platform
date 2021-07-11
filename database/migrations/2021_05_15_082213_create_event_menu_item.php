<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventMenuItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_menu_items', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id')->foreign('event_id')->references('id')->on('events');
	        $table->string('language_code');
	        $table->string('name');
	        $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_menu_items');
    }
}
