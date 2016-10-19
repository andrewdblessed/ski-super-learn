<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class MyTask extends Model
{
     protected $table = 'my_tasks';

  protected $fillable =[
    'task_title',
    'task_body',
    'task_subject',
    'task_type',
    'task_date',
    'task_time',
    'task_range',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}

}
