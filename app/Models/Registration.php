<?php

class Registration extends Eloquent {

	protected $hidden = array( 'group_id', 'event_id' );

	protected $attributes = [
		'cc_assistant_email' => '0',
		'passport_copy' => '',
		'visa_copy' => '',
		'attending_dates' => '',
	];

	protected $fillable = array(
		'prefix',
		'first_name',
		'last_name',
		'organization',
		'position',
		'address',
		'address2',
		'city',
		'postal_code',
		'country',
		'email',
		'assistant_email',
		'cc_assistant_email',
		'phone',
		'mobile_phone',
		'fax',
		'passport_number',
		'passport_issued_by',
		'passport_date_of_issue',
		'passport_date_of_expiry',
		'birthdate',
		'nationality',
		'is_visa_required',
		'local_embassy',
		'departure_city',
		'departure_date',
		'return_date',
		'needs_accomodation',
		'guest_names',
		'room_type',
		'room_arrival',
		'room_departure',
		'room_additional_number_night',
		'dietary_requirements',
		'interpretation',
		'disabilities',
		'attending_dates',
		'remark',
		'category',
		'delegation_name',
		'additional_info',
		'additional_info_2',
		'additional_info_3'
	);

	public static $rules = array(
//		'delegation_name' => 'required',
//		'category'        => 'required',
		'prefix'          => 'required',
		'first_name'      => 'required',
		'last_name'       => 'required',
		'organization'    => 'required',
		'position'        => 'required',
		// 'address'         => 'required',
		// 'city'            => 'required',
		'nationality'     => 'required',
//		'postal_code'     => 'required',
		'country'         => 'required',
		'email'           => 'email|required',
// 'interpretation' => 'required',
//		'passport_copy'   => 'mimes:jpeg,jpg,png,JPG,bmp,png,pdf,PDF',
//		'visa_copy'       => 'mimes:jpeg,jpg,png,JPG,bmp,png,pdf,PDF',
//		'photo'           => 'mimes:jpeg,jpg,png,JPG,bmp,png',
	);

	public function group() {
		return $this->belongsTo( 'Group' );
	}

	public function event() {
		return $this->belongsTo( 'Event' );
	}

	public function setAttendingDatesAttribute( $value ) {
		$this->attributes['attending_dates'] = $value;
	}


}