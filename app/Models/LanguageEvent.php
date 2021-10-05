<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageEvent extends Model {
	public $timestamps = false;

	protected $table = 'language_event';
	protected $fillable = ['language_id', 'event_id'];

	public function event()
	{
		return $this->belongsTo('Event');
	}
}
