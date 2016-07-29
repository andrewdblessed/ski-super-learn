<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('public_note', function (Blueprint $table){
        $table->increments('id');
        $table->text('guest_token');
        $table->integer('note_id');
        $table->integer('upvotes');
        $table->text('comments');
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
      Schema::drop('public_note');

    }
}
