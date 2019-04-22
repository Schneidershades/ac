<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advert;
use App\Models\User;

class Upload extends Model
{
	protected $fillable = [
        'filename' ,
        'size' ,
        'user_id' ,
    ];
    
    public function advert()
    {
    	return $this->belongsTo(Advert::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
