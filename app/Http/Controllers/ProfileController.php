<?php

namespace Skilearn\Http\Controllers;
/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR USER PROFILE, DETAILS AND MORE
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;

/**
 *
 */
class ProfileController extends controller{
  /**
  *REVIEW:
  * THE PROFILE INDEX VIEW
  *
  **/
  public function getProfile($username)
  {
    $title =$username;
  $skiSearch = false;
  $skiSearch_placehold = "";

    $user = User::where('username', $username)->first();

    if (!$user) {
      abort(404);
    }

    return view('profile.index')
    ->with('title', $title)
    ->with('user', $user)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
  }
  // ENDS

  /**
  *REVIEW: THE PROFILE EDIT VIEW
*/
    	public function getEdit()
    	{
        $title = "Edit Profile";
      $skiSearch = false;
      $skiSearch_placehold = "";
          	return view('profile.edit')
      ->with('title', $title)
      ->with('skiSearch', $skiSearch)
      ->with('skiSearch_placehold',   $skiSearch_placehold);
    	}
//ENDS

/**
*REVIEW: THE PROFILE EDIT POST FUN
*/
    	public function postEdit(Request $request)
    	{
    	$this->validate($request, [
    		'first_name' => 'required|max:20',
    		'last_name' =>'required|max:20',
    		'location' => 'max:20',
        'gender' => 'max:20',
        'birthday' => 'max:210',


    	]);

    Auth::User()->update([
    		'first_name' => $request->input('first_name'),
    		'last_name' => $request->input('last_name'),
    		'location' => $request->input('location'),
        'birthday' => $request->input('birthday'),
        'gender' => $request->input('gender'),
    // IDEA: add some extral form sections here for the app
    ]);

    return redirect()
        ->route('profile.edit')
    ->with('info', 'your profile has been updated');
    	}
// ENDS

}
