<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
        protected $table = 'my_class';

  protected $fillable =[
   	'class_subject',
    'class_date',
    'class_time',
     ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}
}
