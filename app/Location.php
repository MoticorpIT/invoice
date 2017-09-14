<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends ModelBase
{
    public function tax_groups()
    {
        return $this->belongsTo(TaxGroup::class);
    }
}
