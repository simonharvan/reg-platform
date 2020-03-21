<?php 
class CodeText extends Eloquent {
	public $timestamps = false;
	
	public function code()
    {
        return $this->belongsTo('Code');
    }

}