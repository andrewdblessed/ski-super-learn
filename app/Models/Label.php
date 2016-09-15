<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    // 
      protected $table = 'Label';

  protected $fillable = [
    'label',
   ];

     public function user()
    {
      return $this->belongsTo('Skilearn\Models\User', 'user_id');

    }
}
