<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class AinoteNote extends Model
{
  protected $table = 'Ainote-note';

  protected $fillable =[
    'note_title',
    'note_body',
    'note_date',
    'note_color',
   'Ainote_id',
   'Ainote_name',
   'Ainote_bg',
  'guest_token',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}

public function Ainote()
{
  return $this->belongsTo('Skilearn\Models\User', 'Ainote_id');
}
}
