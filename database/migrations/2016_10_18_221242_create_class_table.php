<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('zone', function (Blueprint $table){
        $table->increments('id');
        $table->integer('user_id');
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
         Schema::drop('zone');
    }
}
