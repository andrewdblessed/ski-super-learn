<?php

namespace Skilearn\Http\Controllers;
use Skilearn\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\html;
use Auth;

/**
 *
 */
class SectionController extends controller
  {
    public function StudentSection()
    {
        $title ='Student Section';
return view ('section.index')->with('title', $title);
    }

public function ClassSection()
{
  $title ='Your classses';
return view ('section.class')->with('title', $title);
}


public function YearSection()
{
  $title ='Current Year';
  return view ('section.year')->with('title', $title);
}
// REVIEW:// DO NOT REMOVE THE CLOSING TAGS BELOW
public function getSubjectSection()
{
  $title ='Your Subject';
  $active ='Active';

if (Auth::check()) {
    $sub_call = Subject::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
        ->orderBy('created_at', 'desc')
        ->get();

return view ('section.subject')
->with('title', $title)
->with('sub_call', $sub_call);

    }
}
  }
