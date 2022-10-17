<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApprovalEmailSubjectEventTexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_texts', function (Blueprint $table) {
            $table->text('approval_email_subject')->after('registration_top_note')->nullable();
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
            $table->dropColumn('approval_email_subject');
        });
    }
}
