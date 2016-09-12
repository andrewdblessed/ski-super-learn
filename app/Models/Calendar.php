<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
      protected $table = 'calendar';

      protected $fillable =[
        'section',
        ];

    public function user()
    {
      return $this->belongsTo('Skilearn\Models\User', 'user_id');

    }

  //
}
