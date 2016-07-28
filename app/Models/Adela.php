<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Adela extends Model
/**
 *
 */
{
  protected $table = 'adela';

  protected $fillable =[
    'activate_ai',
    'gender_ai',
    'quote_ai',
    'chat_ai',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');
}


}
