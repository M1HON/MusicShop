<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('name', 20);
            $table->integer('brands_id')->unsigned()->unique();
            $table->integer('types_id')->unsigned()->unique();
            $table->string('price', 20);
            $table->string('material', 50);
            $table->string('photo', 50);
            $table->string('rating', 50);
            $table->foreign('brands_id')->references('id')->on('brands');
            $table->foreign('types_id')->references('id')->on('types');
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
        Schema::dropIfExists('instruments');
    }
}
