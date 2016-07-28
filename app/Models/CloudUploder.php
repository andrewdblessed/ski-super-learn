<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class CloudUploder extends Model
{
  protected $table = 'cloud-upload';

  public $fillable =[
    'filename',
    'filetype',
    'filesize',
  ];

  public function user()
  {
    return $this->belongsTo('Skilearn\Models\User', 'user_id');

  }
}
