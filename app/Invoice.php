<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends ModelBase
{
    public function customer(){
    	return $this->belongsTo('App\Customer');
    }

    public function status(){
    	return $this->belongsTo('App\Status');
    }
}
