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

class AcademicController extends Controller
{

  /**
  *REVIEW:
  * THE Ainote INDEX VIEW
  *
  **/
  public function index()
   {
      $title ='My Academics';
    $skiSearch = false;
    $skiSearch_placehold = "";

     return view('academic.index')
      ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
   }


}
