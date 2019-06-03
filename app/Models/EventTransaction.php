<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\EventPackage;
use App\Models\User;

class EventTransaction extends Model
{
	protected static function boot()
    {
    	parent::boot();

    	static::creating(function($file){
    		$file->identifier = 'eventTxn'.uniqid(true);
    	});
    }

    public function event()
    {
    	return $this->belongsTo(Event::class);
    }

    public function eventPackage()
    {
    	return $this->belongsTo(EventPackage::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
