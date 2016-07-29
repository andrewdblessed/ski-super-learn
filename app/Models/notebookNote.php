<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class NotebookNote extends Model
{
  protected $table = 'notebook-note';

  protected $fillable =[
    'note_title',
    'note_body',
    'note_date',
   'notebook_id',
   'notebook_name',
  'guest_token',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}

public function notebook()
{
  return $this->belongsTo('Skilearn\Models\User', 'notebook_id');
}
}
