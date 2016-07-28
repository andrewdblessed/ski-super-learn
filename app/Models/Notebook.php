<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
  protected $table = 'notebook';

  protected $fillable =[
    'notebook_title',
    'notebook_des',
    'notebook_bg',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}

}
