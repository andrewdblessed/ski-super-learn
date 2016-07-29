<?php

namespace Skilearn\Http\Controllers;
use Auth;
use Skilearn\Models\Notebook;
use Skilearn\Models\User;
use Skilearn\Models\Adela;
use Skilearn\Models\Notes;
use Skilearn\Models\Exp;
use Illuminate\Http\Request;
/**
 *
 */
class NotesController extends controller
    {
      public function postNotes(Request $request)
      {
      $this->validate($request, [
        'title' => 'required|max:170',
        'subject_select' => 'max:100',
        'body' => 'required|max:1000',
        'color' => 'max:17',

      ]);
      Auth::user()->notes()->create([
        'note_title' => $request->input('title'),
        'note_subject' => $request->input('subject_select'),
        'note_body' => $request->input('body'),
        'note_color' => $request->input('color'),
      ]);
      return redirect()->route('dashboard.notes')->with('signupsuccess', 'New note Added.');

           }

    public function trashNotes(Request $request)
      {
      $this->validate($request, [
        'title' => 'required|max:170',
        'body' => 'required|max:1000',
        'color' => 'max:17',

      ]);
      Auth::user()->notes()->detach([
        'note_title' => $request->input('title'),
        'note_body' => $request->input('body'),
        'note_color' => $request->input('color'),
      ]);
      return redirect()->route('dashboard.notes')->with('signupsuccess', 'New note Added.');

           }
          //  public function updateNotes(Request $request)
          //    {
          //      if (Auth::check()) {
          //    $this->validate($request, [
          //      'title' => 'required|max:170',
          //      'body' => 'required|max:1000',
          //      'color' => 'max:17',
           //
          //    ]);
          //    Notes::where('id', '=', notes()->id)->update([
          //      'note_title' => $request->input('title'),
          //      'note_body' => $request->input('body'),
          //      'note_color' => $request->input('color'),
          //    ]);
          //    return redirect()->route('dashboard.notes')->with('signupsuccess', 'note edited.');
           //
          //         }
          //       }

      public function viewNotes()
      {
          $title ='Notes';

          if (Auth::check()) {
              $note_call = Notes::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->orderBy('created_at', 'desc')
                  ->paginate();

                  $sub_call = Subject::where(function($query)
                      {
                        return $query->where('user_id', Auth::user()->id);
                      })
                      ->orderBy('created_at', 'desc')
                      ->get();
                      $adela_config = Adela::where(function($query)
                          {
                            return $query->where('user_id', Auth::user()->id);
                          })
                          ->orderBy('created_at', 'desc')
                          ->get();
                          //exp
                          $exp_lev = Exp::where(function($query)
                                {
                                  return $query->where('user_id', Auth::user()->id);
                                })
                                ->orderBy('created_at', 'desc')
                                ->get();

          return view ('dashboard.notes')
          ->with('title', $title)
          ->with('note_call', $note_call)
          ->with('adela_config', $adela_config)
          ->with('exp_lev', $exp_lev)
          ->with('sub_call', $sub_call);

              }
      }
      public function Notes_area()
      {
          $title ='Notes';

          if (Auth::check()) {
              $note_call = Notes::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                  ->orderBy('created_at', 'desc')
                  ->paginate(0);

                  $sub_call = Subject::where(function($query)
                      {
                        return $query->where('user_id', Auth::user()->id);
                      })
                      ->orderBy('created_at', 'desc')
                      ->get();
                      $adela_config = Adela::where(function($query)
                          {
                            return $query->where('user_id', Auth::user()->id);
                          })
                          ->orderBy('created_at', 'desc')
                          ->get();

          return view ('dashboard.notes.notesload')
          ->with('title', $title)
          ->with('note_call', $note_call)
          ->with('adela_config', $adela_config)
          ->with('sub_call', $sub_call);

              }
      }
      public function getsingleNote(Notes $notes)
      {
        // dd($notes);
        return view('dashboard.notes.view', compact('notes'))

        ->with('note_call', $notes);
}

public function newNote()
{
    $title ='Notes';




    if (Auth::check()) {
        $note_call = Notes::where(function($query)
            {
              return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(0);

            $sub_call = Subject::where(function($query)
                {
                  return $query->where('user_id', Auth::user()->id);
                })
                ->orderBy('created_at', 'desc')
                ->get();
                $adela_config = Adela::where(function($query)
                    {
                      return $query->where('user_id', Auth::user()->id);
                    })
                    ->orderBy('created_at', 'desc')
                    ->get();

    return view ('dashboard.notes.newnote')
    ->with('title', $title)
    ->with('note_call', $note_call)
    ->with('adela_config', $adela_config)
    ->with('sub_call', $sub_call);

        }
}
//REVIEW CALLING NOTES IN DATABASE

      }
