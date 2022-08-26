<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_links', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id')->foreign('event_id')->references('id')->on('events');
            $table->string('language_code')->foreign('language_code')->references('language_code')->on('languages');
            $table->string('title');
            $table->string('icon')->nullable();
            $table->text('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_links');
    }
}
