<?php

namespace Skilearn\Http\Controllers;

use Auth;
use Skilearn\Models\User;
use Illuminate\Http\Request;
use Illuminate\Html;
/**
 *
 */
class AuthController extends controller
{

public function getSignup()
  {
    $title ='Sign up';
return view ('auth.signup')->with('title', $title);
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
  'email' => 'required',
  'password' => 'required',
]);

if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
	return redirect()->back()->with('warning', 'Oops; Check the Email and password Again' );
}
return redirect()->route('home')->with('signin', 'you are now signed in');
	}

 public function getSignout()
{
	Auth::logout();

	return redirect()->route('home')->with('signout', 'you are now signed out');
}
}
