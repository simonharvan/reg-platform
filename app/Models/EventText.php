<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventText extends Model {
	public $timestamps = false;

	protected $fillable = [
		'event_id',
		'language_code',
		'travel_data_note',
		'room_additional_number_night_help',
		'confirmation_text',
		'email_subject',
		'email_confirmation_text',
		'email_please_review',
		'email_signature',
		'email_registration_details',
		'email_hotel_nonsponsored',
		'email_questionnaire',
		'title',
		'registration_note',
		'registration_top_note'
	];

	public function event() {
		return $this->belongsTo( 'Event' );
	}

}
