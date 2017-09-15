<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends ModelBase
{
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function invoice(){
    	return $this->belongsTo(Invoice::class);
    }

    public function payments(){
    	return $this->belongsTo(Payment::class);
    }
}
