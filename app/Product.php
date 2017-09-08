<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends ModelBase
{
    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }

    public function line_items()
    {
        return $this->hasMany(LineItem::class);
    }

    // URL RE-WRITE - Replaces Product Id for Product Name in url
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}