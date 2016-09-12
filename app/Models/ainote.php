<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Ainote extends Model
{
  protected $table = 'Ainote';

  protected $fillable =[
    'Ainote_title',
    'Ainote_des',
    'Ainote_bg',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}

}
