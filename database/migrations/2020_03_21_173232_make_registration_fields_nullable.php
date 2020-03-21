<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class MakeRegistrationFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function($table)
        {
            $table->string('additional_file')->nullable()->change();
            $table->string('attending_dates')->nullable()->change();
            $table->string('delegation_name')->nullable()->change();
            $table->string('category')->nullable()->change();
            $table->string('photo')->nullable()->change();
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
            $table->string('additional_file')->change();
            $table->string('attending_dates')->change();
            $table->string('delegation_name')->change();
            $table->string('category')->change();
            $table->string('photo')->change();
        });
    }
}
