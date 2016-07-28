<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
/**
 *
 */
{
  protected $table = 'notes';

  protected $fillable =[
    'note_title',
    'note_body',
    'note_subject',
    'note_color',
  ];

public function user()
{
  return $this->belongsTo('Skilearn\Models\User', 'user_id');

}
public function upnotes()
{
  return   $this->user()->where('id', '=', 'note_id');
}
}
