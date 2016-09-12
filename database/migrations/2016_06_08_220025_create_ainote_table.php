<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAinoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ainote', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->text('Ainote_title');
            $table->text('Ainote_des');
            $table->text('Ainote_color');
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
      Schema::drop('Ainote');
    }
}
