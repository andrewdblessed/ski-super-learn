<?php

namespace Skilearn\Http\Controllers;
use Skilearn\Models\User;
use Illuminate\Http\Request;
use Auth;

/**
 *
 */
class AjaxController extends controller
  {
    public function getallnote()
    {
    return view ('ajax.index');
    }
    public function Ajax()
    {
return view ('ajax.index');
    }

    public function Ajax_Class()
    {
return view ('ajax.class.index');
    }

    public function Ajax_Todo()
    {
return view ('ajax.todo.index');
    }

    public function Ajax_Exam()
    {
return view ('ajax.exam.index');
    }
// REVIEW:// DO NOT REMOVE THE CLOSING TAGS BELOW
  }
