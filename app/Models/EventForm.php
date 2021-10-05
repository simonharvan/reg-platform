<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventForm extends Model {
	public $timestamps = false;

	protected $fillable = [
		'event_id',
		'form'
	];

	public function event() {
		return $this->belongsTo( 'Event' );
	}

}
