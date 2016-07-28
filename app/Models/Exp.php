<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Exp extends Model
/**
 *
 */
{
  protected $table = 'exp';

  protected $fillable =[
    'lev',
    ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');
}


}
