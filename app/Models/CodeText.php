<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeText extends Model {
	public $timestamps = false;

	protected $fillable = [
		'code_id',
		'language_code',
		'instructions'
	];

	public function code() {
		return $this->belongsTo( 'Code' );
	}

}
