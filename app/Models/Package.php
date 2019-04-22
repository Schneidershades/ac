<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\PackageFeature;

class Package extends Model
{
	protected $fillable = [
        'title' ,
        'status' ,
        'finished' ,
        'amount',
    ];
    

    public function packageFeatures()
    {
       return $this->hasMany(PackageFeature::class);
    }
}
