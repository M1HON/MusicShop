<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;

    public function brand()
{
    return $this->belongsTo('App\Brand');
}

public function tipe()
{
    return $this->belongsTo('App\Type');
}

public function instrument(){
    return $this->hasMany('App\ProductReservation', 'Instrument_name','Name');
}

public function insttrument_in_shop(){
    return $this->hasMany('App\ProductReservation', 'Instrument_name','Name');
}
}
