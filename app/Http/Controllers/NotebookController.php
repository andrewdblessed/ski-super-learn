<?php

namespace Skilearn\Http\Controllers;

/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR NOTEBOOK SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;

//CALLING THE NOTEBOOK MODEL TO CALL NOTEBOOK DETAILS
use Skilearn\Models\Notebook;

//CALLING THE notebookNote MODEL TO CALL each user notes
use Skilearn\Models\notebookNote;

class NotebookController extends Controller
{
  /**
  *REVIEW:
  * THE NOTEBOOK INDEX VIEW
  *
  **/
  public function index()
   {
      $title ='Notebooks';
    $skiSearch = true;
    $skiSearch_placehold = "Search Notebooks and notes";
    $bg_number = intval( "0" . rand(1,20)  ); // random(ish) 12 digit int

     return view('dashboard.notebook.index')
      ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('bg_number', $bg_number)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
   }
  //  END
   /**
   *REVIEW:
   *CALLING ALL NOTEBOOKS CREATED BY THE USER
   *
   **/
  public function allNotebooks()
  {
    $title ='Notebooks';
    if (Auth::check()) {
        $notebook_all = Notebook::where(function($query)
            {
              return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate();
            // dd($notebook_all);
    return view ('dashboard.notebook.allnotebook')
    ->with('title', $title)
    ->with('notebook_all', $notebook_all);

        }

  }
  //END

  //  END
   /**
   *REVIEW:
   *CALLING ALL NOTEBOOKS CREATED BY THE USER
   *
   **/
  public function makeNotes()
  {
    if (Auth::check()) {
        $notebook_all = Notebook::where(function($query)
            {
              return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate();
            // dd($notebook_all);
    return view ('dashboard.notes.notes-no-nb')
    ->with('notebook_all', $notebook_all);

        }

  }
  //END

  /**
  *REVIEW:
  *CALLING ALL NOTEBOOKS CREATED BY THE USER
  *
  **/
  public function notebookManager()
  {
    $title ='Notebooks';
    $skiSearch = true;
    $skiSearch_placehold = "Search Notebooks and notes";
    if (Auth::check()) {
        $notebook_all = Notebook::where(function($query)
            {
              return $query->where('user_id', Auth::user()->id);
            })
            ->orderBy('created_at', 'desc')
            ->paginate();
            // dd($notebook_all);
    return view ('dashboard.notebook.nbmanager.index')
    ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold)
    ->with('notebook_all', $notebook_all);

        }

  }
 //END
 /**
 *REVIEW:
 *CALLING ALL NOTEBOOKS O NOTEBOOK MANAGER
 *
 **/
public function allnb()
{
  if (Auth::check()) {
      $notebook_all = Notebook::where(function($query)
          {
            return $query->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate();
          // dd($notebook_all);
  return view ('dashboard.notebook.nbmanager.allnb')
  ->with('notebook_all', $notebook_all);

      }

}
//END
/**
*REVIEW:
*Adding the notebook details to the new note of the user
*
**/
     public function newNote($id)
      {
        $notebooks = Notebook::findorFail($id);

                 return view('dashboard.notes.newnote', compact('notebooks'))

                 ->with('notebooks', $notebooks);


}


     /**
     *REVIEW:
     *Creating a notebook
     *
     **/
  public function postNotebooks(Request $request)
  {
  $this->validate($request, [
    'notebook_title' => 'required|max:50',
    'notebook_des' => 'max:300',
    'notebook_bg' => 'min:0',

  ]);
  Auth::user()->notebooks()->create([
    'notebook_title' => $request->input('notebook_title'),
    'notebook_des' => $request->input('notebook_des'),
    'notebook_bg' => $request->input('notebook_bg'),
  ]);
        return redirect()->route('dashboard.notebook.index')->with('notebook-created', 'New Notebook Added.');

       }
      //  END

      /**
      *REVIEW:
      * Creating a note for a notebook
      *
      **/
      public function postNote(Request $request)
      {
      $this->validate($request, [
        'note_title' => 'required|max:170',
        'note_body' => 'required|min:',
        'notebook_id' => 'required|min:0',
        'note_date' => 'min:0',
        'notebook_name' => 'required|min:2',

      ]);
      Auth::user()->notebookNote()->create([
        'note_title' => $request->input('note_title'),
        'note_body' => $request->input('note_body'),
        'note_date' => $request->input('note_date'),
        'notebook_id' => $request->input('notebook_id'),
        'notebook_name' => $request->input('notebook_name'),
      ]);
      return redirect()->route('dashboard.notebook.index')->with('notebook-created', 'New note Added.');

           }
          //  END

          /**
          *REVIEW:
          *CALLING ALL NOTES THAT BELONGS TO A NOTEBOOK CREATED BY THE USER
          *
          **/
         public function getallnote()
         {
           $title ='Notes';
           if (Auth::check()) {
               $note_all = notebookNote::where(function($query)
                   {
                     return $query
                    ->where('user_id', Auth::user()->id);
                   })
                   ->orderBy('created_at', 'desc')
                   ->paginate();
                   //dd($note_all);
           return view ('dashboard.notebook.allnote')
           ->with('note_all', $note_all);

               }

         }
         //END

         /**
         *REVIEW:
         *get a notebook by the id of the notebook//
         *results are pulledin with javascript
         **/
              public function getaNotebook($id)
               {
                 $notebooks = Notebook::findorFail($id);

                 if (is_null($notebooks)) {

                   abort(404);
                 }
                 if (Auth::check()) {
                     $note_all = notebookNote::where(function($query)
                         {
                           return $query
                          ->where('user_id', Auth::user()->id);
                       })
                         ->orderBy('created_at', 'desc')
                         ->paginate();
                         return view('dashboard.notebook.anotebook', compact('notebooks'))
                         ->with('notebooks', $notebooks)
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
            $notes = notebookNote::findorFail($id);

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
  //  $notes = notebookNote::findorFail($note_title);
  $notes = notebookNote::where('guest_token',$guest_token)->get();
   if ($notes != true) {

     abort(404);
   }

 // dd($id);
return view('guest.note', compact('notes'))
->with('note', $notes)
->with('title', $title)
->with('skiSearch', $skiSearch)
->with('skiSearch_placehold',   $skiSearch_placehold);
//  ->with('note_all', $note_all);


}
// END
/**
*REVIEW:
* DELETING A NOTEBOOK BASE ON ID
*
**/
public function deleteNotebook ($id){
  $deletenb = Notebook::find($id);
     $deletenb->delete();
  return redirect()->to('/notebooks');
}

// END

/**
*REVIEW:
* UPDATING A NOTEBOOK BASE ON ID
*
**/
public function updateNotebook (Request $request, $id ){
  $updatenb = Notebook::find($id);
       $this->validate($request, [
    'notebook_title' => 'required|max:50',
    'notebook_des' => 'max:300',
    // 'notebook_color' => 'max:17',

  ]);
  $updatenb->update([
    'notebook_title' => $request->input('notebook_title'),
    'notebook_des' => $request->input('notebook_des'),
    // 'notebook_color' => $request->input('notebook_color'),
  ]);
        return redirect()->route('dashboard.notebook.index')->with('notebook-created', 'Notebook updated.');

}

// END

/**
*REVIEW:
* DELETING A NOTE BASE ON ID
*
**/
public function deleteNote ($id){
  $deletenote = notebookNote::find($id);
     $deletenote->delete();
  return redirect()->to('/notebooks/manager');
}

// END

// /**
// *REVIEW:
// * DELETING A NOTE BASE ON ID
// *
// **/
// public function Trashnotes ($notebook_id){
//   // $trashnote = notebookNote::find($notebook_id);
//     //  $trashnote->detach();
//     Auth::user()->notebookNote($notebook_id)->dele();
//   return redirect()->to('/notebooks');
// }
//
// // END


/**
*REVIEW:
* UPDATING A NOTE BASE ON ID
*
**/
public function updateNote (Request $request, $id ){
  $updatenote = notebookNote::find($id);
       $this->validate($request, [
         'note_title' => 'required|max:170',
         'note_body' => 'required|min:3',
    // 'notebook_color' => 'max:17',

  ]);
  $updatenote->update([
    'note_title' => $request->input('note_title'),
    'note_body' => $request->input('note_body'),
    // 'notebook_color' => $request->input('notebook_color'),
  ]);
        return redirect()->route('dashboard.notebook.index')->with('notebook-created', 'Note updated.');

}

// END



//XXX end controller class
}
