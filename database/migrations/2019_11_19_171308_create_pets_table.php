<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->integer('items_id')->unsigned(); 
            $table->string('nombre');
            $table->string('tipo'); 
            $table->integer('users_id')->unsigned();  
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('items_id')->references('id')->on('items');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
