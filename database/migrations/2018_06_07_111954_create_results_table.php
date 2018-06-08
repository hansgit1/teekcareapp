<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('resultaat_nummer')->unsigned();
            $table->foreign('resultaat_nummer')->references('id')->on('questions');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');            
            $table->integer('score');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
