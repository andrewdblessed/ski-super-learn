<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('my_class', function (Blueprint $table){
        $table->increments('id');
         $table->integer('user_id');
        $table->text('class_subject');
        $table->text('class_date');
        $table->time('class_time');
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
      Schema::drop('my_class');
    }
}
