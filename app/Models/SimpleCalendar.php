<?php

namespace Skilearn\Models;

use Illuminate\Database\Eloquent\Model;

class SimpleCalendar extends Model
{
      protected $table = 'simplecalendar';

      protected $fillable =[
	      'event_name',
	      'event_des',
		  'created_by',
		  'event_link',
		  'event_priority',
		  'event_status',
		  'event_label',
		  'event_start',
		  'event_end',
		  'event_start_time',
		  'event_end_time',
        ];

    public function user()
    {
      return $this->belongsTo('Skilearn\Models\User', 'user_id');

    }

  //
}
