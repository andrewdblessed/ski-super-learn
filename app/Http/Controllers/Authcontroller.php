<?php

namespace Skilearn\Http\Controllers;

/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR Ainote SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;

//WORKING ON GETTING THE FORM DATA
use Illuminate\Html;

/**
 *
 */
class AuthController extends controller
{
  /**
  *REVIEW:
  *VARIOUS PLANS AND THEIR SIGNUP PAGE
  *
  **/
public function getSignup()
  {
return view ('auth.register')->with('title', $title);
  }
// XXX:   BASIC PLAN
  public function basicPlan()
    {
  return view ('auth.plans.basic');
    }
    // XXX:   PRO PLAN

    public function proPlan()
      {
    return view ('auth.plans.pro');
      }
      // XXX:   PREMIUM PLAN

      public function premiumPlan()
        {
      return view ('auth.plans.premium');
        }
 public function postSignup(Request $request)
{

$this->validate($request, [
  'email' => 'required|unique:users|email|max:255',
  'last_name' => 'required',
  'first_name' => 'required',
  'username' => 'required|unique:users|alpha_dash|max:20',
  'password' => 'required|min:7',
]);

User::create([
'email' => $request->input('email'),
 'username' => $request->input('username'),
'password' => bcrypt($request->input('password')),
'first_name' => $request->input('first_name'),
'last_name' => $request->input('last_name'),
  ]);

return redirect()->route('auth.signin')->with('signupsuccess', 'your account as been created and you can now sign in.');
}

/***
// TODO: sign in function begins
***/
	public function getSignin()
	{
    $title ='Log in';
  return view ('auth.signin')->with('title', $title);
	}
	public function postSignin(Request $request)
	{
	$this->validate($request, [
  'username' => 'required',
  'password' => 'required',
]);

if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))) {
	return redirect()->back()->with('warning', 'Oops; Check the Email and password Again' );
}
return redirect()->route('home')->with('signin', 'you are now signed in');
	}

 public function getSignout()
{
	Auth::logout();

	return redirect()->route('home')->with('signout', 'you are now signed out');
}

public function getLock()
  {
    $title ='Account Locked';
return view ('auth.lock')->with('title', $title);
  }

  public function postUnlocked(Request $request)
  {
  $this->validate($request, [
  'password' => 'required',
]);

if (Auth::attempt($request->only(['password']))) {
  return redirect()->back()->with('warning', 'Oops; Check the Email and password Again' );
}
return redirect()->route('home')->with('signin', 'Account Unlocked');
  }




public function getpricing()
  {
    $title ='Sign up';
return view ('auth.pricing')->with('title', $title);
  }

}
