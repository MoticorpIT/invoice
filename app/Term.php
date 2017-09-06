<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    public function term(){
    	return $this->belongsTo('App\Invoice');
    }
}
