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
            $table->string('Name', 20);
            $table->primary('Name');
            $table->string('BrandName', 20)->index();
            $table->string('Type', 20)->index();
            $table->string('Price', 20);
            $table->string('Material', 50);
            $table->string('Photo', 50);
            $table->string('Rating', 50);
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
