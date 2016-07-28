<?php

namespace Skilearn\Http\Controllers;

use Illuminate\Http\Request;

use Skilearn\Http\Requests;
use Socialite;

class FacebookController extends Controller
{
    //

    public function facebook()
{
    return Socialite::with('facebook')->redirect();
}

public function callback()
{
    $user = Socialite::with('facebook')->user();
// All Providers
$user->getId();
$user->getNickname();
$user->getName();
$user->getEmail();
$user->getAvatar();
dd($user);

// return "<h2>".$user->getEmail()."<h2>";
}

}
