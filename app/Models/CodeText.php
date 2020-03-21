<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeText extends Model {
	public $timestamps = false;
	
	public function code()
    {
        return $this->belongsTo('Code');
    }

}