<?php

namespace Skilearn\Http\Controllers;

/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR Ainote SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;

//CALLING THE Ainote MODEL TO CALL Ainote DETAILS
use Skilearn\Models\Ainote;

//CALLING THE AinoteNote MODEL TO CALL each user notes
use Skilearn\Models\AinoteNote;

class AinoteController extends Controller
{
  /**
  *REVIEW:
  * THE Ainote INDEX VIEW
  *
  **/
  public function index()
   {
      $title ='Ainotes';
    $skiSearch = true;
    $skiSearch_placehold = "Search Ainotes and notes";
    $bg_number = intval( "0" . rand(1,12)  ); // random(ish) 12 digit int

   $guest_token = chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . rand(0,9). rand(0,9)
       . rand(0,9). rand(0,9) . chr(rand(65,90)) ; // random(ish) 18 character token
        
      return view('dashboard.Ainote.index')
      ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('bg_number', $bg_number)
    ->with('skiSearch_placehold',   $skiSearch_placehold)
     ->with('guest_token', $guest_token);
   }
  //  END
   /**
   *REVIEW:
   *CALLING ALL AinoteS CREATED BY THE USER
   *
   **/
   public function allAinotes()
   {
     $title ='Ainotes';
     $bg_number = intval( "0" . rand(1,12)  ); // random(ish) 12 digit int
     if (Auth::check()) {
         $Ainote_all = Ainote::where(function($query)
             {
               return $query->where('user_id', Auth::user()->id);
             })
             ->orderBy('created_at', 'desc')
             ->paginate();
             // dd($Ainote_all);
     return view ('dashboard.Ainote.allAinote')
     ->with('bg_number', $bg_number)

       ->with('Ainote_all', $Ainote_all);

         }

   }
  //END

  //  END
   /**
   *REVIEW:
   *CALLING ALL AinoteS CREATED BY THE USER
   *
   **/
  public function makeNotes()
  {
    if (Auth::check()) {
        $Ainote_all = Ainote::where(function($query)
            {
              return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate();
            // dd($Ainote_all);
    return view ('dashboard.notes.notes-no-nb')
    ->with('Ainote_all', $Ainote_all);

        }

  }
  //END

  /**
  *REVIEW:
  *CALLING ALL AinoteS CREATED BY THE USER
  *
  **/
  public function AinoteManager()
  {
    $title ='Ainotes';
    $skiSearch = true;
    $skiSearch_placehold = "Search Ainotes and notes";
    if (Auth::check()) {
        $Ainote_all = Ainote::where(function($query)
            {
              return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate();
            // dd($Ainote_all);
    return view ('dashboard.Ainote.nbmanager.index')
    ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold)
    ->with('Ainote_all', $Ainote_all);

        }

  }
 //END
 /**
 *REVIEW:
 *CALLING ALL AinoteS O Ainote MANAGER
 *
 **/
public function allnb()
{
  if (Auth::check()) {
      $Ainote_all = Ainote::where(function($query)
          {
            return $query->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate();
          // dd($Ainote_all);
  return view ('dashboard.Ainote.nbmanager.allnb')
  ->with('Ainote_all', $Ainote_all);

      }

}
//END

/**
*REVIEW:
*Adding the Ainote details to the new notes with a notebook of the user
*
**/
     public function newNote($id)
      {
        $Ainotes = Ainote::findorFail($id);

        $guest_token = chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . rand(0,9). rand(0,9)
       . rand(0,9). rand(0,9) . chr(rand(65,90)) ; // random(ish) 18 character token
                 return view('dashboard.notes.newnote', compact('Ainotes'))
                 ->with('guest_token', $guest_token)
                 ->with('Ainotes', $Ainotes);


}
//END

/**
*REVIEW:
*Adding the Ainote details to the new notes with a notebook of the user
*
**/
     public function new_note_index()
      {
        $Ainotes = "Ainote";

        $guest_token = chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . rand(0,9). rand(0,9)
       . rand(0,9). rand(0,9) . chr(rand(65,90)) ; // random(ish) 18 character token
                 return view('dashboard.notes.newnote_index', compact('Ainotes'))
                 ->with('guest_token', $guest_token)
                 ->with('Ainotes', $Ainotes);


}

// END
     /**
     *REVIEW:
     *Creating a Ainote
     *
     **/
  public function postAinotes(Request $request)
  {
  $this->validate($request, [
    'Ainote_title' => 'required|max:50',
    'Ainote_des' => 'max:300',
    'Ainote_bg' => 'min:1',

  ]);
  Auth::user()->Ainotes()->create([
    'Ainote_title' => $request->input('Ainote_title'),
    'Ainote_des' => $request->input('Ainote_des'),
    'Ainote_bg' => $request->input('Ainote_bg'),
  ]);
        return redirect()->route('dashboard.Ainote.index')->with('Ainote-created', 'New Ainote Added.');

       }
      //  END

      /**
      *REVIEW:
      * Creating a note for a Ainote
      *
      **/
      public function postNote(Request $request)
      {
      $this->validate($request, [
        'note_title' => 'required|max:170',
        'note_body' => 'required|min:',
        'note_date' => 'min:0',
        'guest_token' => 'required|min:2',


      ]);
      Auth::user()->AinoteNote()->create([
        'note_title' => $request->input('note_title'),
        'note_body' => $request->input('note_body'),
        'note_date' => $request->input('note_date'),
         'guest_token' => $request->input('guest_token'),
      ]);
      return redirect()->to('/Ainotes')->with('Ainote-created', 'New note Added.');

           }
          //  END

          /**
          *REVIEW:
          *CALLING ALL NOTES THAT BELONGS TO A Ainote CREATED BY THE USER
          *
          **/
         public function getallnote()
         {
           $title ='Notes';
            $guest_token = chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . rand(0,9). rand(0,9)
       . rand(0,9). rand(0,9) . chr(rand(65,90)) ; // random(ish) 18 character token
        

           $emp_note = rand(1,4); // random(ish)  character number

           if (Auth::check()) {
               $note_all = AinoteNote::where(function($query)
                   {
                     return $query
                    ->where('user_id', Auth::user()->id);
                   })
                   ->orderBy('created_at', 'desc')
                   ->paginate();
                   //dd($note_all);
           return view ('dashboard.Ainote.allnote')
           ->with('note_all', $note_all)        ->with('guest_token', $guest_token)   ->with('emp_note', $emp_note);

               }

         }
         //END

         /**
         *REVIEW:
         *get a Ainote by the id of the Ainote//
         *results are pulledin with javascript
         **/
              public function getaAinote($id)
               {
                 $Ainotes = Ainote::findorFail($id);

                 if (is_null($Ainotes)) {

                   abort(404);
                 }
                 if (Auth::check()) {
                     $note_all = AinoteNote::where(function($query)
                         {
                           return $query
                          ->where('user_id', Auth::user()->id);
                       })
                         ->orderBy('created_at', 'desc')
                         ->paginate();
                         return view('dashboard.Ainote.aAinote', compact('Ainotes'))
                         ->with('Ainotes', $Ainotes)
                         ->with('note_all', $note_all);

               }
         }
         //END

         /**
         *REVIEW:
         * lOADING THE A SINGLE NOTE BASE ON THE ID
         *
         **/

         public function getaNote($id)
          {
            $notes = AinoteNote::findorFail($id);

            if (is_null($notes)) {

              abort(404);
            }

        //  dd($notes);
        return view('dashboard.notes.view', compact('notes'))
        ->with('notes', $notes);
      //  ->with('note_all', $note_all);


}

public function getguestNote($guest_token)
 {
   $title ='Guest Notes';
 $skiSearch = false;
 $skiSearch_placehold = "";

  $shared_token = chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . chr(rand(65,90))
       . rand(0,9). rand(0,9)
       . rand(0,9). rand(0,9) . chr(rand(65,90)) ; // random(ish) 18 character token

  //  $notes = AinoteNote::findorFail($note_title);
  $notes = AinoteNote::where('guest_token',$guest_token)->get();
   if ($notes != true) {

     abort(404);
   }

 // dd($id);
return view('guest.note', compact('notes'))
->with('note', $notes)
->with('shared_token', $shared_token);


}
// END
/**
*REVIEW:
* DELETING A Ainote BASE ON ID
*
**/
public function deleteAinote ($id){
  $deletenb = Ainote::find($id);
     $deletenb->delete();
  return redirect()->to('/Ainotes');
}

// END

/**
*REVIEW:
* UPDATING A Ainote BASE ON ID
*
**/
public function updateAinote (Request $request, $id ){
  $updatenb = Ainote::find($id);
       $this->validate($request, [
    'Ainote_title' => 'required|max:50',
    'Ainote_des' => 'max:300',
    // 'Ainote_color' => 'max:17',

  ]);
  $updatenb->update([
    'Ainote_title' => $request->input('Ainote_title'),
    'Ainote_des' => $request->input('Ainote_des'),
    // 'Ainote_color' => $request->input('Ainote_color'),
  ]);
        return redirect()->route('dashboard.Ainote.index')->with('Ainote-created', 'Ainote updated.');

}

// END

/**
*REVIEW:
* DELETING A NOTE BASE ON ID
*
**/
public function deleteNote ($id){
  $deletenote = AinoteNote::find($id);
     $deletenote->delete();
  return redirect()->to('/Ainotes/manager');
}

// END

// /**
// *REVIEW:
// * DELETING A NOTE BASE ON ID
// *
// **/
// public function Trashnotes ($Ainote_id){
//   // $trashnote = AinoteNote::find($Ainote_id);
//     //  $trashnote->detach();
//     Auth::user()->AinoteNote($Ainote_id)->dele();
//   return redirect()->to('/Ainotes');
// }
//
// // END


/**
*REVIEW:
* UPDATING A NOTE BASE ON ID
*
**/
public function updateNote (Request $request, $id ){
  $updatenote = AinoteNote::find($id);
       $this->validate($request, [
         'note_title' => 'required|max:170',
         'note_body' => 'required|min:3',
    // 'Ainote_color' => 'max:17',

  ]);
  $updatenote->update([
    'note_title' => $request->input('note_title'),
    'note_body' => $request->input('note_body'),
    // 'Ainote_color' => $request->input('Ainote_color'),
  ]);
        return redirect()->to('/Ainotes')->with('Ainote-created', 'Note updated.');

}

// END



//XXX end controller class
}
