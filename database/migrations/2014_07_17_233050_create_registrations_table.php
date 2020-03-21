<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::create('registrations', function ($table) {
            $table->increments('id');
            $table->integer('event_id');
            $table->integer('group_id');

			/** A. PERSONAL DATA **/
			// $table->boolean('is_sponsored');
			// $table->string('gender')->nullable();
			$table->string('prefix')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('organization')->nullable();
			$table->string('position')->nullable();
			$table->string('address')->nullable();
			$table->string('address2')->nullable();
			$table->string('city')->nullable();
			$table->string('postal_code')->nullable();
			$table->string('country')->nullable();
			$table->string('email')->nullable();
			$table->string('assistant_email')->nullable();
			$table->boolean('cc_assistant_email');
			$table->string('phone')->nullable();
			$table->string('mobile_phone')->nullable();
			$table->string('fax')->nullable();
			// $table->string('first_name_passport')->nullable();
			// $table->string('last_name_passport')->nullable();

			/** B. TRAVEL / VISA DATA **/
			$table->string('passport_number')->nullable();
			$table->string('passport_issued_by')->nullable();
			$table->date('passport_date_of_issue')->nullable();
			$table->date('passport_date_of_expiry')->nullable();
			$table->date('birthdate')->nullable();
			$table->string('nationality')->nullable();
			$table->boolean('is_visa_required')->nullable();
			$table->text('local_embassy')->nullable();
			$table->string('departure_city')->nullable();
			$table->datetime('departure_date')->nullable();
			$table->datetime('return_date')->nullable();

			/** C. HOTEL ACCOMMODATION **/
			$table->boolean('needs_accomodation')->nullable();
			$table->string('guest_names')->nullable();
			$table->string('room_type')->nullable();
			$table->datetime('room_arrival')->nullable();
			$table->datetime('room_departure')->nullable();
			$table->integer('room_additional_number_night')->nullable();
			// $table->string('arrival_brussels')->nullable();
			// $table->string('departure_brussels')->nullable();

			/** D. ADDITIONAL INFORMATION  **/
			// $table->string('insurance_required')->nullable();
			$table->string('dietary_requirements')->nullable();
			$table->string('interpretation')->nullable();
			$table->string('disabilities')->nullable();
			$table->string('remark')->nullable();

			/*
			$table->string('travel_remarks')->nullable();
			$table->string('room_remarks')->nullable();
			$table->string('account_holder_name')->nullable();
			$table->string('account_holder_address')->nullable();
			$table->string('account_number')->nullable();
			$table->string('account_iban')->nullable();
			$table->string('bank')->nullable();
			$table->string('bank_address')->nullable();
			$table->string('bic_swift')->nullable();
			$table->string('registration_date_created')->nullable();
			$table->string('registration_date_completed')->nullable();
			$table->string('registration_date_modified')->nullable();
			$table->string('registration_status')->nullable();
			$table->string('registration_notes')->nullable();
			$table->string('visa_sent')->nullable();
			$table->string('profile_notes')->nullable();
			$table->string('flight_proposed')->nullable();
			$table->string('flight_confirmed')->nullable();
			$table->string('flight_sent')->nullable();
			// $table->string('flight_number_in')->nullable();
			// $table->string('flight_number_out')->nullable();
			// $table->string('room_requests')->nullable();
			// $table->string('room_is_cancelled')->nullable();
			*/
            $table->timestamps();
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('registrations');
	}

}
