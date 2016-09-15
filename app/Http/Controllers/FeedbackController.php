<?php

namespace Skilearn\Http\Controllers;
use Auth;
use Skilearn\Models\User;
use Illuminate\Http\Request;
/**
 *
 */
class FeedbackController extends controller
{

public function index()
  {
           return view('feedback.index');
   
  }

  public function postDocin(Request $request)
  {
  $this->validate($request, [
  'username' => 'required',
  'password' => 'required',
]);

if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))) {
  return redirect()->back()->with('warning', 'Oops; Check the Email and password Again' );
}
return redirect()->route('doc')->with('signin', 'you are now signed in');
  }



}
