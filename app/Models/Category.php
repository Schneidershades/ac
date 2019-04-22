<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
use App\Models\Advert;
use App\Models\User;

class Category extends Model
{
    public function subCategories(){
    	return $this->hasMany(SubCategory::class);
    }

    public function adverts()
    {
    	return $this->hasMany(Advert::class);
    }

    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
