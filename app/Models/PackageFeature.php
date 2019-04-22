<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Package;

class PackageFeature extends Model
{
    public function package()
    {
    	return $this->belongsTo(Package::class);
    }
}
