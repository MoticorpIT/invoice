<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends ModelBase
{
    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }

    // public function getRouteKeyName()
    // {
    // 	return 'slug';
    // }
}