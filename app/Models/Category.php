<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advert;
use App\Models\User;
use App\Models\Post;

class Category extends Model
{
    
    public function adverts()
    {
    	return $this->hasMany(Advert::class);
    }

    public function users()
    {
    	return $this->hasMany(User::class);
    }

    public function post()
    {
    	return $this->hasMany(Post::class);
    }
}
