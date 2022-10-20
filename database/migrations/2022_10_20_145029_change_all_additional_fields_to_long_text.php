<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAllAdditionalFieldsToLongText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->longText('additional_field_0')->change();
            $table->longText('additional_field_1')->change();
            $table->longText('additional_field_2')->change();
            $table->longText('additional_field_3')->change();
            $table->longText('additional_field_4')->change();
            $table->longText('additional_field_5')->change();
            $table->longText('additional_field_6')->change();
            $table->longText('additional_field_7')->change();
            $table->longText('additional_field_8')->change();
            $table->longText('additional_field_9')->change();
            $table->longText('additional_field_10')->change();
            $table->longText('additional_field_11')->change();
            $table->longText('additional_field_12')->change();
            $table->longText('additional_field_13')->change();
            $table->longText('additional_field_14')->change();
            $table->longText('additional_field_15')->change();
            $table->longText('additional_field_16')->change();
            $table->longText('additional_field_17')->change();
            $table->longText('additional_field_18')->change();
            $table->longText('additional_field_19')->change();
            $table->longText('additional_field_20')->change();
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
            $table->string('additional_field_0')->change();
            $table->string('additional_field_1')->change();
            $table->string('additional_field_2')->change();
            $table->string('additional_field_3')->change();
            $table->string('additional_field_4')->change();
            $table->string('additional_field_5')->change();
            $table->string('additional_field_6')->change();
            $table->string('additional_field_7')->change();
            $table->string('additional_field_8')->change();
            $table->string('additional_field_9')->change();
            $table->string('additional_field_10')->change();
            $table->string('additional_field_11')->change();
            $table->string('additional_field_12')->change();
            $table->string('additional_field_13')->change();
            $table->string('additional_field_14')->change();
            $table->string('additional_field_15')->change();
            $table->string('additional_field_16')->change();
            $table->string('additional_field_17')->change();
            $table->string('additional_field_18')->change();
            $table->string('additional_field_19')->change();
            $table->string('additional_field_20')->change();
        });
    }
}
