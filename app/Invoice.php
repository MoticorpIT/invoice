<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends ModelBase
{
    // 
    public function customer() {
    	return $this->belongsTo(Customer::class);
    }

    public function status() {
    	return $this->belongsTo(Status::class);
    }

    public function notes() {
    	return $this->hasMany(Note::class);
    }

    public function term() {
    	return $this->belongsTo(Term::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function line_items() {
        return $this->hasMany(LineItem::class);
    }

    public function ship_method() {
        return $this->belongsTo(ShipMethod::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    // URL RE-WRITE (replaces ID with Invoice Number in URL)
    public function getRouteKeyName() {
        return 'inv_number';
    }
}
