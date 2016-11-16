<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone_posts', function (Blueprint $table){
        $table->increments('id');
        $table->integer('user_id');
        $table->text('categories');
        $table->text('ques_head');
        $table->text('ques_body');
        $table->text('type');
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
         Schema::drop('zone_posts');
    }
}
