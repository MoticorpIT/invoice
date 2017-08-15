<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends ModelBase
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
