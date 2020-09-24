<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buyer_id')->unsigned()->unique();
            $table->integer('instrument_id')->unsigned()->unique();
            $table->integer('shop_id')->unsigned()->unique();
            $table->foreign('buyer_id')->references('id')->on('buyers');
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('instrument_id')->references('id')->on('instruments');
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
        Schema::dropIfExists('product_reservations');
    }
}
