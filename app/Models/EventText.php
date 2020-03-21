<?php 
class EventText extends Eloquent {
	public $timestamps = false;
	
	public function event()
    {
        return $this->belongsTo('Event');
    }

}