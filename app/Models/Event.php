<?php 
class Event extends Eloquent {
	public $timestamps = false;
	
	public function languages()
    {
        return $this->belongsToMany('Language', 'language_event', 'language_id', 'event_id');
    }

	public function texts()
    {
        return $this->hasMany('EventText');
    }

}