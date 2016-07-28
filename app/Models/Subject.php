<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
/**
 *
 */
{
  protected $table = 'subjects';

  protected $fillable =[
    'subject'
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');
}
}
