<?php 
class Code extends Eloquent {
    
    public $timestamps = false;

	public function group()
    {
        return $this->belongsTo('Group');
    }

	public function event()
    {
        return $this->belongsTo('Event');
    }

	public function texts()
    {
        return $this->hasMany('CodeText');
    }

}