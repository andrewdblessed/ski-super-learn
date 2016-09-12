<?php

namespace Skilearn\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Skilearn\Models\User;
use Skilearn\Models\Adela;
use Skilearn\Models\Exp;

class AdelaController extends Controller
{

  public function postAdela_settings(Request $request)
  {
  $this->validate($request, [
    'activate_ai' => 'max:2',
  ]);
  Auth::user()->adela()->create([
    'activate_ai' => $request->input('activate_ai'),

  ]);
  return redirect()->route('adela.settings')->with('signupsuccess', 'Settings Saved.');
// dd('all ok');
       }

       public function postAdela_update(Request $request)
       {
       $this->validate($request, [
         'activate_ai' => 'max:2',
         'quote_ai' => 'max:2',
         'chat_ai' => 'max:2',
       ]);
       Auth::user()->adela()->update([
         'activate_ai' => $request->input('activate_ai'),
         'gender_ai' => $request->input('gender_ai'),
        //  'language_ai' => $request->input('language_ai'),
         'quote_ai' => $request->input('quote_ai'),
         'chat_ai' => $request->input('chat_ai'),
       ]);
       return redirect()->route('adela.settings');
      //  ->with('signupsuccess', 'Settings Saved.');
     // dd('all ok');
            }

  public function load_adela_about()
  {
    $title ='About Adela';
    return view ('adela.about')->with('title', $title);
  }


    public function wiki()
    {
      $skiSearch = false;
      $skiSearch_placehold = "Search disabled";
      $title ='Adela';
      return view ('adela.wikisearch')->with('title', $title)
      ->with('skiSearch', $skiSearch)
      ->with('skiSearch_placehold',   $skiSearch_placehold);
    }
// XXX:: Ai-notes
public function getAi_note()
{
  $bg_number = intval( "0" . rand(1,12)  ); // random(ish) 12 digit int

  return view ('dashboard.ainote.ai-note')
   ->with('bg_number', $bg_number);
}
//XXX AI-NOTES ENDS

  public function load_adela()
  {

    $skiSearch = false;
    $skiSearch_placehold = "Search disabled";
    $title ='Adela';
      if (Auth::check()) {
        $exp_lev = Exp::where(function($query)
              {
                return $query->where('user_id', Auth::user()->id);
              })
              ->orderBy('created_at', 'desc')
              ->get();
        $user = User::where(function($query)
        {
        return $query->where('user_id', Auth::user()->id);
      });

return view ('adela.index')
->with('title', $title)
->with('user', $user)
->with('exp_lev', $exp_lev)
->with('skiSearch', $skiSearch)
->with('skiSearch_placehold',   $skiSearch_placehold);
  }
}
  public function load_adela_settings()
  {
    $title ='Adela Settings';
    if (Auth::check()) {
        $adela_config = Adela::where(function($query)
            {
              return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->get();
// dd($adela_config);
            return view ('adela.settings')
            ->with('title', $title)
                ->with('adela_config', $adela_config);

  }

}
//REVIEW:// ADELA COLLECTS DATA function
public function postAdela_query(Request $request)
{
$this->validate($request, [
  'user_query' => 'min:1',
  'adela_response' => 'min:p1',
  'cat' => 'min:2',
]);
Auth::user()->AdelaDB()->create([
  'user_query' => $request->input('user_query'),
  'adela_response' => $request->input('adela_response'),
  'cat' => $request->input('cat'),
]);
return redirect()->route('adela.index')
 ->with('signupsuccess', 'saved');
// dd('all ok');
     }
    //
}
