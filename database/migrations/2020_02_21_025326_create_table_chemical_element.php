<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChemicalElement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemical_element', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('symbol');
            $table->double('atomicNumber',15, 8);
            $table->double('weight',15, 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chemical_element');
    }
}
