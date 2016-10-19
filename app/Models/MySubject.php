<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class MySubject extends Model
{
    protected $table = 'my_subject';

  protected $fillable =[
    'subject',
    'subject_bg',
   ];

   public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}

}
