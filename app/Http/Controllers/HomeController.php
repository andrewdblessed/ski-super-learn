<?php

namespace Skilearn\Http\Controllers;
use Auth;
use Skilearn\Models\User;
use Skilearn\Models\Exp;
use Skilearn\Models\Notes;
use Illuminate\Http\Request;
/**
 *
 */
class HomeController extends controller
{

public function index()
  {
    $title ='Dashboard';
        $skiSearch = false;
    $skiSearch_placehold = " ";
    if (Auth::check()) {

      $exp_lev = Exp::where(function($query)
          {
            return $query->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->get();
         return view('dashboard.index')
    ->with('title', $title)
    ->with('exp_lev', $exp_lev)
   ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
    }

  return view('home');
  }





}
