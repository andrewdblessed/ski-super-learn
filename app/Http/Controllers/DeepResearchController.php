<?php

namespace Skilearn\Http\Controllers;

use Illuminate\Http\Request;

use Skilearn\Http\Requests;

class DeepResearchController extends Controller
{
    //
    public function index()
    {
    	      $title ='Deep Research';
    $skiSearch = true;
    $skiSearch_placehold = "";

     return view('deepresearch.index')
      ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
    }
}
