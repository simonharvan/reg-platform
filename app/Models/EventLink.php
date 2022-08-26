<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventLink extends Model {
	public $timestamps = false;

	public function event()
    {
        return $this->belongsTo('Event');
    }
}
