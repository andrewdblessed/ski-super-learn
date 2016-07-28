<?php

namespace Skilearn\Http\Controllers;

use Illuminate\Http\Request;

use Skilearn\Http\Requests;
use Socialite;

class GoogleController extends Controller
{
    //

    public function Google()
{
    return Socialite::with('google')->redirect();
}

public function gooback()
{
    $user = Socialite::with('google')->user();

    // OAuth Two Providers
$token = $user->token;

// All Providers
$user->getId();
$user->getNickname();
$user->getName();
$user->getEmail();
$user->getAvatar();

//dd($user);
// return "<h2>".$user->getEmail()."<h2><h2>".$user->getName()."<h2><img src='".$user->getAvatar()."'>" ;
// return "<h2>".$user->getNickname()."<h2>";

// XXX sending the gotten data as a variable to blade
$googlename = $user->getName();
$googleemail = $user->getEmail();
$googleavatar = $user->getAvatar();
 return view ('auth.google')
         // ->with('title', $title)
            ->with('googlename', $googlename)
            ->with('googleemail', $googleemail)
            ->with('googleavatar', $googleavatar);
}

}
