<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function shop(){
        return $this->hasMany('App\ProductReservation', 'Shop_address','Address');
    }

    public function store_shop(){
        return $this->hasMany('App\GoodsInShop', 'Shop_address','Address');
    }
}
