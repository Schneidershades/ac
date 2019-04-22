<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Referral extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
    public function referralUser()
    {
    	return $this->belongsTo(User::class);
    }

    public function upline()
    {
    	return $this->belongsTo(User::class , 'referral_id');
    }
}
