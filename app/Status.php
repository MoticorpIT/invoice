<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends ModelBase
{
    public function invoice(){
    	return $this->belongsTo('App\Invoice');
    }
}
