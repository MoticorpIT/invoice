<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function time(){
    	return $this->belongsTo(User::class);
    }
}
