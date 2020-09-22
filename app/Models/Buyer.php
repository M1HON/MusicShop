<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    public function prodreserv(){
        return $this->hasMany('App\ProductReservation', 'Buyer_id','Id');
    }
}
