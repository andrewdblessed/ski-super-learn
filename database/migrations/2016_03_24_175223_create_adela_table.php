<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adela', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('activate_ai');
            $table->text('gender_ai');
            $table->text('language_ai');
            $table->boolean('quote_ai');
            $table->boolean('chat_ai');
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
      Schema::drop('adela');
    }
}
