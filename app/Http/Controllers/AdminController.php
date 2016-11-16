<?php

namespace Skilearn\Http\Controllers;


/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR ADMIN SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;

//CALLING THE ADMIN MODEL TO CALL ADMIN DETAILS
use Skilearn\Models\Admin;

//CALLING THE FACTS MODEL TO CALL FACTS DETAILS
use Skilearn\Models\facts;

use Skilearn\Http\Requests;

class AdminController extends Controller
{
  /**
  *REVIEW:
  * THE Ainote INDEX VIEW
  *
  **/
  public function index()
   {
      $title ='ADMIN PANEL';

      $facts = facts::where(function($query)
          {
            return $query;
          //  ->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate();

      return view('admin.index')
      ->with('title', $title)  ->with('facts', $facts);
     }
  //  END

  public function postFacts(Request $request)
  {
  $this->validate($request, [
      'facts' => 'required|min:10',
  ]);
  Auth::user()->facts()->create([
    'facts' => $request->input('facts'),
  ]);
  return redirect()->to('/admin_skicreator')->with('Ainote-created', 'New note Added.');

       }



}
