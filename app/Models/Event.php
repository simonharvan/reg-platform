<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;

    protected $fillable = ['redirect_url'];

    public function languages()
    {
        return $this->belongsToMany('App\Models\Language', 'language_event', 'event_id', 'language_id');
    }

    public function languageEvents()
    {
        return $this->hasMany('App\Models\LanguageEvent', 'event_id', 'id');
    }

    public function texts()
    {
        return $this->hasMany('App\Models\EventText');
    }

    public function menuItems()
    {
        return $this->hasMany('App\Models\EventMenuItem');
    }

    public function links()
    {
        return $this->hasMany('App\Models\EventLink');
    }

    public function eventForms()
    {
        return $this->hasMany('App\Models\EventForm');
    }

    public function codes()
    {
        return $this->hasMany('App\Models\Code');
    }
}
