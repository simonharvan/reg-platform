<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApprovalTokenToRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('approval_token')->nullable();
        });
        Schema::table('events', function (Blueprint $table) {
            $table->integer('approval_for_event_id')->nullable()->foreign('event_id')->references('id')->on('events');
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
            $table->dropColumn('approval_token');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('approval_for_event_id');
        });
    }
}
