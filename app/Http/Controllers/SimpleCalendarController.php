<?php


namespace Skilearn\Http\Controllers;

/**
*REVIEW:
* THIS CONTROLELR CONTROLS THE USER SIMPLE CALENDAR SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;
use Skilearn\Models\Label;
use Skilearn\Models\Calendar;
use Skilearn\Models\SimpleCalendar;

class SimpleCalendarController extends Controller
{
    //
     /**
  *REVIEW:
  * THE SIMPLE CALENDAR POST FUNCTION
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
// ENDS HERE

        //
     /**
  *REVIEW:
  * THE SIMPLE CALENDAR POST FUNCTION
  *
  **/
  public function updateSimpleCal(Request $request, $id){
    $updateEvent = SimpleCalendar::find($id);
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
    $updateEvent->update([
     'event_name' => $request->input('event_name'),
     'event_des' => $request->input('event_des'),
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
// ENDS HERE



 /**
  *REVIEW:\
  * THE SIMPLE CALENDAR VIEW
  *
  **/
     public function simple()
   {

 // NOTE:: PULLING CALENDAR LABELS OF THE USER

              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();

     return view('calendar.simple')
      ->with('cal_label', $cal_label);
   }


     public function main()
   {
      if (Auth::check()) {
              $cal_event = SimpleCalendar::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();


 // NOTE:: PULLING CALENDAR LABELS OF THE USER

              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();
        return view('calendar.simple_ajax.events')
     ->with('cal_event', $cal_event)
     ->with('cal_label', $cal_label);

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
// END

         /**
         *REVIEW:
         *get a EVENT by the id of the EVENT//
         *results are pulledin with javascript jbox modal
         **/
              public function getEvent($id)
               {
                 $simple_event = SimpleCalendar::findorFail($id);

                 if (is_null($simple_event)) {

                   abort(404);
                 }
                 if (Auth::check()) {

          // NOTE:: PULLING CALENDAR LABELS OF THE USER

              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();
                return view('calendar.simple_ajax.sidebar', compact('simple_event'))
                ->with('simple_event', $simple_event)
                ->with('cal_label', $cal_label);
                 // ->with('note_all', $note_all);

               }
         }


/**
*REVIEW:
* DELETING A EVENTS BASE ON ID
*
**/
public function deleteEvent ($id){
  $deleteEvent = SimpleCalendar::find($id);
     $deleteEvent->delete();
  return redirect()->to('/calendar');
}

// END



    //

}
