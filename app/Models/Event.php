<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	public $timestamps = false;

	public function languages()
    {
        return $this->belongsToMany('App\Models\Language', 'language_event', 'event_id', 'language_id');
    }

	public function texts()
    {
        return $this->hasMany('App\Models\EventText');
    }

	public function menuItems()
	{
		return $this->hasMany('App\Models\EventMenuItem');
	}
}
