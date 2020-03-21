<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {
	public $timestamps = false;
	
	public function languages()
    {
        return $this->belongsToMany('App\Models\Language', 'language_event', 'language_id', 'event_id');
    }

	public function texts()
    {
        return $this->hasMany('App\Models\EventText');
    }

}