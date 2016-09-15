<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolCalyearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
      Schema::create('SchoolCalyear', function (Blueprint $table){
      $table->increments('id');
      $table->text('user_id');
      $table->text('year_name');
      $table->text('year_des');
      $table->text('year_start');
      $table->text('year_end');

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
        Schema::drop('SchoolCalyear');
    }
}
