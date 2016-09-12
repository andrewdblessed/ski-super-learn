<?php


namespace Skilearn\Http\Controllers;

/**
*REVIEW:
* THIS CONTROLELR CONTROLS THE USER ACADEMIC SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;
use Skilearn\Models\Calendar;
use Skilearn\Models\SimpleCalendar;

class SimpleCalendarController extends Controller
{
    //
     /**
  *REVIEW:
  * THE SIMPLE CALENDAR VIEW
  *
  **/
  public function postSimpleCal(Request $request)
   {
   $this->validate($request, [
     'event_name' => 'required',
     'event_des' => 'required',
     'created_by' => 'required',
     'event_link' => 'required',
     'event_priority' => 'required',
     'event_status' => 'required',
     'event_label' => 'required',
     'event_start' => 'required',
     'event_end' => 'required',
     'event_start_time' => 'required',
     'event_end_time' => 'required',

   ]);
   Auth::user()->SimpleCalendar()->create([
     'event_name' => $request->input('event_name'),
     'event_des' => $request->input('event_name'),
     'created_by' => $request->input('created_by'),
     'event_link' => $request->input('event_link'),
     'event_priority' => $request->input('event_priority'),
     'event_status' => $request->input('event_status'),
     'event_label' => $request->input('event_label'),
     'event_start' => $request->input('event_start'),
	   'event_end' => $request->input('event_end'),   
     'event_start_time' => $request->input('event_start_time'),
     'event_end_time' => $request->input('event_end_time'),
	   ]);
   return redirect()->route('calendar')
    ->with('signupsuccess', 'event Added');
    }


 /**
  *REVIEW:
  * THE SIMPLE CALENDAR VIEW
  *
  **/
     public function simple()
   {
     return view('calendar.simple');
   }


     public function main()
   {
      if (Auth::check()) {
              $cal_event = SimpleCalendar::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();

        return view('calendar.simple_ajax.events')
     ->with('cal_event', $cal_event);
   }
 }

  /**
  *REVIEW:
  * THE SIMPLE CALENDAR SIDE BAR VIEW
  *
  **/
     public function sidebar()
   {
       if (Auth::check()) {
              $cal_event = SimpleCalendar::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();

     return view('calendar.simple_ajax.sidebar')
     ->with('cal_event', $cal_event);
   }
}

    // 

}
