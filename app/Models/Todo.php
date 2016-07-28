<?php

namespace Skilearn\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Html;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $table = 'todo';

  protected $fillable = [
    'todo_title',
    'todo_date',
    'todo_time',
    'todo_done',

  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');
}


}
