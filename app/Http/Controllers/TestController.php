<?php

namespace Skilearn\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
/**
 *
 */
class TestController extends controller
{

  public function Editcode()
  {
       $title ='Dashboard';
        $skiSearch = false;
    $skiSearch_placehold = " ";
            return view('test.index')
    ->with('title', $title)
   ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
   }

   public function Dropezone()
   {
        $title ='Dashboard';
         $skiSearch = false;
     $skiSearch_placehold = " ";
             return view('test.dropzone')
     ->with('title', $title)
    ->with('skiSearch', $skiSearch)
     ->with('skiSearch_placehold',   $skiSearch_placehold);
    }



}
