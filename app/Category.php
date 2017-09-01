<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends ModelBase
{
    public function products()
    {
    	return $this->belongsToMany(Product::class);
    }
}
