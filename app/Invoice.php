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

    public function notes(){
    	return $this->hasMany('App\Note');
    }

    public function term(){
    	return $this->belongsTo('App\Term');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getRouteKeyName()
    {
        return 'inv_number';
    }
}
