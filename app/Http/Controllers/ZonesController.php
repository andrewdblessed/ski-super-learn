<?php

namespace Skilearn\Http\Controllers;


/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR ZONES SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\zone_ques;


use Skilearn\Http\Requests;

class ZonesController extends Controller
{


    /**
    *REVIEW:
    * THE Ainote INDEX VIEW
    *
    **/
    public function index()
     {
        $title ='Ski - Zones';
      $skiSearch = true;
      $skiSearch_placehold = "Search Ainotes and notes";

        return view('zones.index')
        ->with('title', $title)
      ->with('skiSearch', $skiSearch)
      ->with('skiSearch_placehold',   $skiSearch_placehold);

     }
    //  END

/**
      *REVIEW:
      * Creating a question for a zone
      *
      **/
      public function post_ques(Request $request)
      {
      $this->validate($request, [
        'cats' => 'required|max:170',
        'ques_head' => 'required|min:',
        'ques_body' => 'min:0',
        'type' => 'required|min:2',


      ]);
      Auth::user()->zone_ques()->create([
        'cats' => $request->input('cats'),
        'ques_head' => $request->input('ques_head'),
        'ques_body' => $request->input('ques_body'),
         'type' => $request->input('type'),
      ]);
      return redirect()->to('/zones')->with('ques-created', 'Question Asked.');

           }
          //  END

          public function all_posts()
        {
                   $all_post = zone_ques::where(function($query)
                       {
                         return $query;
                       })
                       ->orderBy('created_at', 'desc')
                       ->paginate();



             return view('zones.allposts')
          ->with('all_post', $all_post);


       }


}
