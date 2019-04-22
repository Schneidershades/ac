<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Upload;
use App\Models\User;
use App\Models\Tag;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class Advert extends Model
{
	protected $fillable = [
        'amount',
        'status' ,
        'finished',
    ];

    protected static function boot()
    {
    	parent::boot();

    	static::creating(function($file){
    		$file->identifier = 'advert'.uniqid(true);
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

    public function subCategory()
    {
    	return $this->belongsTo(SubCategory::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function uploads()
    {
    	return $this->hasMany(Upload::class);
    }
    
    public function country()
    {
    	return $this->belongsTo(Country::class);    
    }
    
    public function state()
    {
    	return $this->belongsTo(State::class);    
    }
    
    public function city()
    {
    	return $this->belongsTo(City::class);    
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
