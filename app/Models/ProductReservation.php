<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReservation extends Model
{
    use HasFactory;

    public function prodreserv()
    {
        return $this->belongsTo('App\Buyer');
    }

    public function instrument()
    {
        return $this->belongsTo('App\Instrument');
    }

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
