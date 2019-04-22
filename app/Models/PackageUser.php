<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Package;

class PackageUser extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class , 'user_id');
    }

    public function package()
    {
    	return $this->belongsTo(User::class, 'package_id');
    }
}
