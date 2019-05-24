<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\PostCategory;

class Post extends Model
{
    public function businesCategories()
    {
        return $this->belongsTo(Category::class);
    }

    public function postCategories()
    {
        return $this->belongsTo(PostCategory::class);
    }
}
