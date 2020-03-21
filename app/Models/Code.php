<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model {
    
    public $timestamps = false;

	public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }

	public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

	public function texts()
    {
        return $this->hasMany('App\Models\CodeText');
    }

}