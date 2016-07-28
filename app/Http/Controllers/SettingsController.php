<?php

namespace Skilearn\Http\Controllers;
use Skilearn\Models\User;
use Illuminate\Http\Request;
use Auth;

/**
 *
 */
class SettingsController extends controller
  {
    public function getSetting()
    {
      $title ='Profile Edit';
return view('profile.settings')
    ->with('title', $title);
    }

  }
