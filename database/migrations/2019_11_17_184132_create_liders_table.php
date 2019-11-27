<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liders', function (Blueprint $table) {
            $table->increments('id');  
            //$table->unsignedBigInteger('user_id');
            $table->string('nombre'); 
            $table->string('tipo'); 

            //$table->foreign('user_id')
            //->references('id')
            //->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liders');
    }
}
