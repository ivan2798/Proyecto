<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorLiderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador_lider', function (Blueprint $table) {
            $table->bigIncrements('id');  


            $table->integer('jugador_id')->unsigned();    
            $table->integer('lider_id')->unsigned();  

            $table->foreign('jugador_id')->references('id')->on('jugadors')->onDelete('cascade');;                 
            $table->foreign('lider_id')->references('id')->on('liders')->onDelete('cascade');;   

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
        Schema::dropIfExists('jugador_lider');
    }
}
