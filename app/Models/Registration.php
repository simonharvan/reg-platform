<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model {

	protected $hidden = array( 'group_id', 'event_id' );

	protected $attributes = [
		'cc_assistant_email' => '0',
		'passport_copy' => '',
		'visa_copy' => '',
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
		'additional_file',
		'additional_field',
		'additional_field_2',
		'additional_field_3',
		'additional_field_4',
		'additional_field_5',
		'additional_field_6',
		'additional_field_7',
		'additional_field_8',
		'additional_field_9',
		'additional_field_10',
		'remark',
	);

	public static $rules = array(
//		'delegation_name' => 'required',
//		'category'        => 'required',
//		'prefix'          => 'required',
//		'first_name'      => 'required',
//		'last_name'       => 'required',
//		'organization'    => 'required',
//		'position'        => 'required',
		// 'address'         => 'required',
		// 'city'            => 'required',
//		'nationality'     => 'required',
//		'postal_code'     => 'required',
//		'country'         => 'required',
		'email'           => 'email|required',
//      'interpretation' => 'required',
//		'passport_copy'   => 'mimes:jpeg,jpg,png,JPG,bmp,png,pdf,PDF',
//		'visa_copy'       => 'mimes:jpeg,jpg,png,JPG,bmp,png,pdf,PDF',
//		'photo'           => 'mimes:jpeg,jpg,png,JPG,bmp,png',
	);

	public function group() {
		return $this->belongsTo( 'App\Models\Group' );
	}

	public function event() {
		return $this->belongsTo( 'App\Models\Event' );
	}

	public function setAttendingDatesAttribute( $value ) {
		$this->attributes['attending_dates'] = $value;
	}


}
