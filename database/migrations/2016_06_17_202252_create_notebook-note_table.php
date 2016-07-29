<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotebookNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebook-note', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('notebook_id');
            $table->text('note_title');
            $table->text('note_body');
            $table->text('note_date');
            $table->text('guest_token');
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
      Schema::drop('notebook-note');
    }
}
