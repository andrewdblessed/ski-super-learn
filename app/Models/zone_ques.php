<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class zone_ques extends Model
{
   
    protected $table = 'zone_ques';

    protected $fillable =[
      'cat',
      'ques_head',
      'ques_body',
      'type',
    ];


public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');
}

}
