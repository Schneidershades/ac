<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\City;
use App\Models\Advert;
use App\Models\Profile;

class State extends Model
{
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

    public function city()
    {
    	return $this->hasMany(City::class);
    }
    
    public function advert()
    {
        return $this->hasMany(Advert::class);
    }

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
