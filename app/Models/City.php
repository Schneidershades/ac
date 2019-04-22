<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advert;
use App\Models\Profile;

class City extends Model
{
    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
