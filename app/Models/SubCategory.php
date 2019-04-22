<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Advert;

class SubCategory extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    public function adverts()
    {
    	return $this->hasMany(Advert::class);
    }
}
