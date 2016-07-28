<?php

namespace Skilearn\Http\Controllers;
use Auth;
use Skilearn\Models\User;
use Illuminate\Http\Request;
/**
 *
 */
class SubjectController extends controller
{
    public function PostSubject(Request $request)
    {
    $this->validate($request, [
      'subject' => 'required|max:1000'
    ]);

    Auth::user()->subjects()->create([
        'subject' => $request->input('subject'),
    ]);
    return redirect()->route('section.subject')->with('signupsuccess', 'New Subject Added.');

    }


}
