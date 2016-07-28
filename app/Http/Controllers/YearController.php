<?php

namespace Skilearn\Http\Controllers;
use Skilearn\Models\User;
use Illuminate\Http\Request;
use Auth;

/**
 *
 */
class YearController extends controller
  {
    public function getyear()
    {
      $title ='Manage Classes';
return view('year.index')
    ->with('title', $title);
    }
  //
  //   public function getvid_hub()
  //   {
  //     $title ='Your Video Hub';
  // return view('Year.vidhub')
  //   ->with('title', $title);
  //   }
  //
  //   public function getAll_lib()
  //   {
  // return view('Year.libload');
  //   }
  //
  //   public function getAll_vid()
  //   {
  // return view('Year.vidload');
  //   }




  }
