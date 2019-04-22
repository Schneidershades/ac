<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advert;
use App\Models\State;
use App\Models\Profile;

class Country extends Model
{
    public function states()
    {
    	return $this->hasMany(State::class);
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
