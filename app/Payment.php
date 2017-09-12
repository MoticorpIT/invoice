<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }

    public function pay_types(){
        return $this->belongsTo(PayType::class);
    }

    public function notes() {
    	return $this->hasMany(Note::class);
    }
}
