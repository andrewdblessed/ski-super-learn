<?php

namespace Skilearn\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Skilearn\Models\User;
use Skilearn\Models\Exp;

class ExpController extends Controller
{
  public function postExp_up(Request $request)
  {
  $this->validate($request, [
      'lev' => 'min:2',
  ]);
  Auth::user()->Exp()->create([
    'lev' => $request->input('lev'),
  ]);

  // dd('all ok');
       }

       //update
       public function postExp_update(Request $request)
       {
       $this->validate($request, [
           'lev' => 'min:1',
       ]);
       Auth::user()->Exp()->update([
         'lev' => $request->input('lev'),
       ]);
       return redirect()->route('home')
        ->with('signupsuccess', "Yah.. You've Upgraded");
       // dd('all ok');
            }

}
