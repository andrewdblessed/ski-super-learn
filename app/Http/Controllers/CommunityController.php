<?php

namespace Skilearn\Http\Controllers;
use Skilearn\Models\User;
use Illuminate\Http\Request;
use Auth;

/**
 *
 */
class CommunityController extends controller
  {
    public function getCom_view()
    {
      $title ='Study Communities';
       $skiSearch = true;
    $skiSearch_placehold = "Search Notebooks and notes";
       

       
return view('group.index')
    ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
    }

  }
