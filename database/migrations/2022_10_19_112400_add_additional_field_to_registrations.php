<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldToRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('additional_field_11')->nullable();
            $table->string('additional_field_12')->nullable();
            $table->string('additional_field_13')->nullable();
            $table->string('additional_field_14')->nullable();
            $table->string('additional_field_15')->nullable();
            $table->string('additional_field_16')->nullable();
            $table->string('additional_field_17')->nullable();
            $table->string('additional_field_18')->nullable();
            $table->string('additional_field_19')->nullable();
            $table->string('additional_field_20')->nullable();
            $table->string('additional_field_21')->nullable();
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
            $table->dropColumn('additional_field_11');
            $table->dropColumn('additional_field_12');
            $table->dropColumn('additional_field_13');
            $table->dropColumn('additional_field_14');
            $table->dropColumn('additional_field_15');
            $table->dropColumn('additional_field_16');
            $table->dropColumn('additional_field_17');
            $table->dropColumn('additional_field_18');
            $table->dropColumn('additional_field_19');
            $table->dropColumn('additional_field_20');
            $table->dropColumn('additional_field_21');
        });
    }
}
