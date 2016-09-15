<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolCalYear extends Model
{
  protected $table = 'schoolcalyear';

      protected $fillable =[
	      'year_name',
	      'year_des',
		    'year_start',
		    'year_end',
		 ];

    public function user()
    {
      return $this->belongsTo('Skilearn\Models\User', 'user_id');

    }
}
