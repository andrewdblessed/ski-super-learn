<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
      Schema::create('SchoolCalendar', function (Blueprint $table){
      $table->increments('id');
      $table->text('user_id');
      $table->text('event_name');
      $table->text('event_des');
      $table->text('created_by');
      $table->text('event_link');
      $table->text('event_priority');
      $table->text('event_status');
      $table->text('event_label');
      $table->text('event_start');
      $table->text('event_end');
      $table->text('event_start_time');
      $table->text('event_end_time');

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
        Schema::drop('SchoolCalendar');
    }
}
