<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model

  /**
   * THE ZONES CLASS BEGINS HERE
   */
  {
    protected $table = 'zones';

    protected $fillable =[
      'zone_name',
      'note_body',
      'note_subject',
      'note_color',
    ];
}
