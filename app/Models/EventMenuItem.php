<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventMenuItem extends Model {
	public $timestamps = false;

	protected $fillable = [
		'event_id',
		'language_code',
		'name',
		'url'
	];

	public function event() {
		return $this->belongsTo( 'Event' );
	}

}
