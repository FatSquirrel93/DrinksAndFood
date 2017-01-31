<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->string('type');
            $table->integer('size');

            $table->integer('drink_id')->unsigned();
            $table->integer('unit_id')->unsigned();

            $table->foreign('drink_id')->references('id')->on('drink'); // !DO NOT CASCADE
            $table->foreign('unit_id')->references('id')->on('unit'); // !DO NOT CASCADE
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('container');
    }
}
