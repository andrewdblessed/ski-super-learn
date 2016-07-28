<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->text('todo_title');
            $table->boolean('todo_done');
             $table->date('todo_date');
             $table->time('todo_time');
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
      Schema::drop('todo');
    }
}
