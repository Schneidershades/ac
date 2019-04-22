<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WalletFund extends Model
{
	protected $fillable = [
        'status' ,
        'finished',
    ];

    protected static function boot()
    {
    	parent::boot();

    	static::creating(function($walletfund){
    		$walletfund->identifier = uniqid(true);
    	});
    }

    public function getRouteKeyName()
    {
        return 'identifier';
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeFinished(Builder $builder)
    {
        return $builder->where('finished', true);
    }
}
