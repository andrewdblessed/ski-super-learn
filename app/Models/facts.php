<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class facts extends Model
{
  protected $table = 'facts';

  protected $fillable =[
    'facts',
    ];

    public function user()
    {
      return $this->belongsTo('Skilearn\Models\User', 'user_id');

    }
}
