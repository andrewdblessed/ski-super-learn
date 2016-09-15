<?php


namespace Skilearn\Http\Controllers;

/**
*REVIEW:
* THIS CONTROLELR CONTROLS THE USER school CALENDAR SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;
use Skilearn\Models\Label;
use Skilearn\Models\Calendar;
use Skilearn\Models\SchoolCalendar;
use Skilearn\Models\SchoolCalYear;

class SchoolCalendarController extends Controller
{
    //
     /**
  *REVIEW:
  * THE school CALENDAR POST FUNCTION
  *
  **/
  public function postschoolCal(Request $request)
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
   Auth::user()->SchoolCalendar()->create([
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
  * THE school CALENDAR POST FUNCTION
  *
  **/
  public function updateschoolCal(Request $request, $id){
    $updateEvent = SchoolCalendar::find($id);
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
  * THE school CALENDAR VIEW
  *
  **/
     public function school()
   {

 // NOTE:: PULLING SCHOOL YEAR OF THE USER
     
              $school_year = SchoolCalYear::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate(1);

 // NOTE:: PULLING CALENDAR LABELS OF THE USER
     
              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();



     return view('calendar.school')
      ->with('cal_label', $cal_label)
       ->with('school_year', $school_year);
   }


     public function main()
   {
      if (Auth::check()) {
              $cal_event = SchoolCalendar::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();

 // NOTE:: PULLING CALENDAR YEAR OF THE USER
                  $school_year = SchoolCalYear::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate(1);

 // NOTE:: PULLING CALENDAR LABELS OF THE USER
     
              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();
        return view('calendar.school_ajax.events')
     ->with('cal_event', $cal_event)
     ->with('school_year', $school_year)
     ->with('cal_label', $cal_label);

   }
 }

  /**
  *REVIEW:
  * THE school CALENDAR SIDE BAR VIEW
  *
  **/
     public function sidebar()
   {
       if (Auth::check()) {
              $cal_event = SchoolCalendar::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();

     return view('calendar.school_ajax.sidebar')
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
                 $school_event = SchoolCalendar::findorFail($id);

                 if (is_null($school_event)) {

                   abort(404);
                 }
                 if (Auth::check()) {
                    
          // NOTE:: PULLING CALENDAR LABELS OF THE USER
     
              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();
                return view('calendar.school_ajax.sidebar', compact('school_event'))
                ->with('school_event', $school_event)
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
  $deleteEvent = SchoolCalendar::find($id);
     $deleteEvent->delete();
  return redirect()->to('/calendar');
}

// END



    // 

}
