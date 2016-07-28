<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAiDBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AiDB', function (Blueprint $table){
            $table->increments('id');
            $table->increments('user_id');
            $table->text('user_query');
            $table->text('adela_response');
            $table->text('cat');
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
