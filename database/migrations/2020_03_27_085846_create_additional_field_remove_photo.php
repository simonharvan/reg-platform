<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalFieldRemovePhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('delegation_name');
            $table->dropColumn('category');
            $table->dropColumn('photo');
            $table->dropColumn('attending_dates');
            $table->string('additional_field');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registrations', function($table)
        {
            $table->string('delegation_name');
            $table->string('category');
            $table->string('photo');
            $table->string('attending_dates');
            $table->dropColumn('additional_field');
        });
    }
}
