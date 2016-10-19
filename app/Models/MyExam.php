<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class MyExam extends Model
{
        protected $table = 'my_exam';

  protected $fillable =[
   	'exam_subject',
    'exam_seat',
    'exam_date',
    'exam_time',
    'exam_address',
    'exam_timer',
   ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}
}
