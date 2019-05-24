<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventPackage;

class Event extends Model
{
    public function eventPackages()
    {
    	return $this->hasMany(EventPackage::class);
    }
}
