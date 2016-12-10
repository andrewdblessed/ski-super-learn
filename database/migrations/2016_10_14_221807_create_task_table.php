<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('my_tasks', function (Blueprint $table){
        $table->increments('id');
         $table->integer('user_id');
        $table->text('task_title');
        $table->text('task_subject');
        $table->text('task_type');
        $table->text('task_date');
        $table->time('task_time');
        $table->integer('task_range');
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
        Schema::drop('my_tasks');
    }
}
