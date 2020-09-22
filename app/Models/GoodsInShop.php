<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsInShop extends Model
{
    use HasFactory;

    public function store_shop()
    {
        return $this->belongsTo('App\Shop');
    }

    public function insttrument_in_shop()
{
    return $this->belongsTo('App\Instrument');
}
}
