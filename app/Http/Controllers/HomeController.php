<?php

namespace Skilearn\Http\Controllers;



/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR DASHBOARD SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;
//CALLING THE USER SKI STARS
use Skilearn\Models\Exp;

//CALLING THE Ainote MODEL TO CALL Ainote DETAILS
use Skilearn\Models\Ainote;

// USING THE CloudUploder MODEL TO CALL FILES NAME BASE ON USER ID  DETAILS
use Skilearn\Models\CloudUploder;

//CALLING THE AinoteNote MODEL TO CALL each user notes
use Skilearn\Models\AinoteNote;

/**
 *
 */
class HomeController extends controller
{

public function index()
  {
    $title ='Dashboard';
        $skiSearch = false;
    $skiSearch_placehold = " ";
    if (Auth::check()) {
          //EXP
          $exp_lev = Exp::where(function($query)
          {
          return $query->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->get();
          // LAST SAVED NOTES
          $last_notes = AinoteNote::where(function($query)
          {
          return $query
          ->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate(3);
          // NOTES TOTAL COUNT
          $notes = AinoteNote::where(function($query)
          {
          return $query
          ->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate();
          // CLOUD Pack call of all files
          $files = CloudUploder::where(function($query)
          {
          return $query->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate();
          // CLOUD Pack call of last 3 files
          $last_files = CloudUploder::where(function($query)
          {
          return $query->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate(3);

         return view('dashboard.index')
    ->with('title', $title)
    ->with('exp_lev', $exp_lev)
   ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold)
     ->with('last_notes', $last_notes)
      ->with('notes', $notes)
      ->with('files', $files)
      ->with('last_files', $last_files);

    }
    $bg_number = intval( "0" . rand(1,3)  ); // random(ish) 12 digit int

    return view('home')  ->with('bg_number', $bg_number);
    }






}
