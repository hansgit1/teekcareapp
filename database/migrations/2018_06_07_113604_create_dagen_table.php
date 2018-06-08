<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dagen', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // $table->date('huidige_datum');
            // $table->string('klacht')->unsigned();
            // $table->foreign('klacht')->references('symptoom')->on('questions');
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dagen');
    }
}
