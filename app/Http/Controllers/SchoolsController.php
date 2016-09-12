<?php

namespace Skilearn\Http\Controllers;

use Illuminate\Http\Request;

use Skilearn\Http\Requests;

class SchoolsController extends Controller
{
        // XXX:   PRO PLAN

    public function index()
      {
    return view ('school.landing');
      }
  }
