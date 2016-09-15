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
use Skilearn\Models\Label;

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


  /**
  *REVIEW:
  * THE cALENDAR SETTINGS VIEW
  *
  **/

 public function setting()
   {
      $title ='My Calendar settings';
    $skiSearch = false;
    $skiSearch_placehold = "";

// NOTE:: PULLING CALENDAR SECTION OF THE USER AS SELECTED
      if (Auth::check()) {
              $cal_section = Calendar::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate(1);

          return view ('calendar.setting')
          ->with('cal_section', $cal_section)
      ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
   }
 }


 /**
  *REVIEW:
  *   THE LABEL VIEWS AND FUNTION BEGINS
  *
  **/
   public function postLabel(Request $request)
   {
   $this->validate($request, [
     'label' => 'required',
   ]);
   Auth::user()->label()->create([
     'label' => $request->input('label'),
   ]);
   return redirect()->route('labels')
    ->with('signupsuccess', 'label saved');
   // dd('all ok');
    }

// THE LABEL INDEX WITH CALLED LABELS
 public function getLabel()
   {
          $title ='My Calendar';
    $skiSearch = false;
    $skiSearch_placehold = "";
// NOTE:: PULLING CALENDAR LABELS OF THE USER
      if (Auth::check()) {
              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();

          return view ('calendar.label')
          ->with('cal_label', $cal_label)
          ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
   }
 }

// THE LABEL AJAX 
 public function getLabelList()
   {
 // NOTE:: PULLING CALENDAR LABELS OF THE USER
      if (Auth::check()) {
              $cal_label = Label::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->paginate();

          return view ('calendar.label.ajax')
          ->with('cal_label', $cal_label);
   }
 }

/**
*REVIEW:
* DELETING A LABEL BASE ON ID
*
**/
public function deleteLabel ($id){
  $deletelabel = Label::find($id);
     $deletelabel->delete();
  return redirect()->to('/calendar/labels');
}

// END

/**
*REVIEW:
* UPDATING A LABEL BASE ON ID
*
**/
public function updateLabel (Request $request, $id ){
  $updateLabel = label::find($id);
       $this->validate($request, [
       'label' => 'required',
  ]);
  $updateLabel->update([
    'label' => $request->input('label'),
  ]);
        return redirect()->route('labels')->with('Ainote-created', 'label updated.');

}



}
