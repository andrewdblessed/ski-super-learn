<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class AdelaDB extends Model
/**
 *
 */
{
  protected $table = 'aidb';

  protected $fillable =[
    'user_query',
    'adela_response',
    'cat',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');
}


}
