<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('my_exam', function (Blueprint $table){
        $table->increments('id');
        $table->integer('user_id');
        $table->text('exam_subject');
        $table->text('exam_seat');
         $table->text('exam_address');
        $table->text('exam_date');
        $table->time('exam_time');
        $table->integer('exam_timer');
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
         Schema::drop('my_exam');
    }
}
