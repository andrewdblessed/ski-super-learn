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
use Skilearn\Models\SchoolCalYear;
use Skilearn\Models\Label;

class SchoolCalYearController extends Controller
{
      //
     /**
  *REVIEW:
  * THE SIMPLE CALENDAR POST FUNCTION
  *
  **/
  public function postSchoolYear(Request $request)
   {
   $this->validate($request, [
     'year_name' => 'required',
     'year_des' => 'min:2',
     'year_start' => 'required',
     'year_end' => 'required',
     ]);
   Auth::user()->SchoolCalYear()->create([
     'year_name' => $request->input('year_name'),
     'year_des' => $request->input('year_des'),
     'year_start' => $request->input('year_start'),
	 'year_end' => $request->input('year_end'),   
      ]);
   return redirect()->route('calendar')
    ->with('signupsuccess', 'year Added');
    }
// ENDS HERE


  /**
  *REVIEW:
  * THE SCHOOL YEAR DATA VIEW
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
