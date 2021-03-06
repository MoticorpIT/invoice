<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends ModelBase
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function availableLocations()
    {
    	return $this->locations()->where('active', 1);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
