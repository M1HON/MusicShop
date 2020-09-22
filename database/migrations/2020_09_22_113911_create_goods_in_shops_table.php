<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsInShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_in_shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Instrument_name', 20)->index();
            $table->string('Shop_address', 100)->index();
            $table->tinyInteger('NumberOfGoods');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_in_shops');
    }
}
