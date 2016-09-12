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

class CalendarController extends Controller
{



  /**
  *REVIEW:
  * THE POST OF USERS SELECTED SECTION
  *
  **/
   public function postSection(Request $request)
   {
   $this->validate($request, [
     'section' => 'required',
   ]);
   Auth::user()->calendar()->create([
     'section' => $request->input('section'),
   ]);
   return redirect()->route('calendar')
    ->with('signupsuccess', 'section saved');
  //  dd('all ok');
    }

  /**
  *REVIEW:
  * THE cALENDAR INDEX VIEW
  *
  **/

 public function index()
   {
      $title ='My Calendar';
    $skiSearch = false;
    $skiSearch_placehold = "";

// NOTE:: PULLING CALENDAR SECTION OF THE USER AS SELECTED ONE
      if (Auth::check()) {
              $cal_section = Calendar::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate(1);

          return view ('calendar.index')
          ->with('cal_section', $cal_section)
      ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
   }
 }





}
