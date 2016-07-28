<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('notes', function (Blueprint $table){
             $table->increments('id');
             $table->integer('user_id');
             $table->text('note_title');
             $table->text('note_subject');
              $table->text('note_body');
              $table->text('note_color');
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
      Schema::drop('notes');
    }
}
