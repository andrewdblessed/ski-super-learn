<?php

namespace Skilearn\Http\Controllers;
use Skilearn\Models\User;
use Illuminate\Http\Request;
use Skilearn\Http\Controllers\FriendController;
use Auth;

/**
 *
 */
class DashController extends controller
  {




    public function Exam()
    {
      $title ='Exams';
return view ('dashboard.exam')->with('title', $title);
    }

// REVIEW:// DO NOT REMOVE THE CLOSING TAGS BELOW
  }
