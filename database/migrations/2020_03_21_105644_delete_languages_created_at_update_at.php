<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteLanguagesCreatedAtUpdateAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('languages');
        Schema::create('languages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('language_code')->unique();
            $table->string('language_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('languages');
        Schema::create('languages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('language_code')->unique();
            $table->string('language_name');
            $table->timestamps();
        });
    }
}
