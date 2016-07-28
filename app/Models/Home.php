<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
/**
 *
 */
{

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'username');
}
}
