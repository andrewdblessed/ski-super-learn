<?php

namespace Skilearn\Http\Controllers;

/**
*REVIEW:
* THIS CONTROLELR CONTROLS THE USER ACADEMIC SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;
// USING THE CALENDAR MODEL TO CALL CALENDAR DETAILS
use Skilearn\Models\Calendar;
// USING THE MYTASKS MODEL TO CALL TASKS DETAILS
use Skilearn\Models\MyTask;
// USING THE EXAM MODEL TO CALL EXAMS DETAILS
use Skilearn\Models\MyExam;
// USING THE SUBJECT MODEL TO CALL SUBJECT DETAILS
use Skilearn\Models\MySubject;
// USING THE EXAM MODEL TO CALL EXAMS DETAILS
use Skilearn\Models\MyClass;
class CalendarController extends Controller
{


 /**
   *REVIEW:
   * THE cALENDAR INDEX VIEW
  *
 **/

 public function index()
   {
      $title ='My Calendar';
    $skiSearch = false;
    $skiSearch_placehold = "";

         return view ('calendar.index')

      ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);

 }

 // *
  // *REVIEW:
  // * MAIN UPDATE FUNCTION BEGINS
  // *
  // *


  public function main()
   {
     if (Auth::check()) {

       // task
              $my_tasks = MyTask::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
              ->orderBy('created_at', 'desc')
                  ->paginate(5);
// exams
            $my_exams = MyExam::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(5);

        // class
                    $my_class = MyClass::where(function($query)
                {
                  return $query->where('user_id', Auth::user()->id);
                })
              ->orderBy('created_at', 'desc')
                ->paginate(5);

            return view ('calendar.main')
          ->with('my_tasks', $my_tasks)
          ->with('my_exams', $my_exams)
           ->with('my_class', $my_class);
   }
 }

 public function data()
  {
    if (Auth::check()) {

      // task
             $my_tasks = MyTask::where(function($query)
                 {
                   return $query->where('user_id', Auth::user()->id);
                 })
             ->orderBy('created_at', 'desc')
                 ->paginate();
// exams
           $my_exams = MyExam::where(function($query)
       {
         return $query->where('user_id', Auth::user()->id);
       })
     ->orderBy('created_at', 'desc')
       ->paginate();

       // class
                   $my_class = MyClass::where(function($query)
               {
                 return $query->where('user_id', Auth::user()->id);
               })
             ->orderBy('created_at', 'desc')
               ->paginate();

           return view ('calendar.data')
         ->with('my_tasks', $my_tasks)
         ->with('my_exams', $my_exams)
         ->with('my_class', $my_class);
  }
}

 public function myCalendar()
   {
      $title ='My Calendar';

      if (Auth::check()) {
              $my_tasks = MyTask::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
              ->orderBy('created_at', 'desc')
                  ->paginate(100);
                  // exams
                   $my_exams = MyExam::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(100);

            return view ('calendar.my')
            ->with('title', $title)
          ->with('my_tasks', $my_tasks)->with('my_exams', $my_exams);
   }
   }


  // *
  // *REVIEW:
  // * TASK FUNCTION BEGINS
  // *
  // *
  public function myTask()
   {

       if (Auth::check()) {
              $my_tasks = MyTask::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
                ->orderBy('created_at', 'desc')
                  ->paginate(30);
                  $my_subject = MySubject::where(function($query)
                      {
                        return $query->where('user_id', Auth::user()->id);
                      })
                    ->orderBy('created_at', 'desc')
                      ->paginate(10);

            return view ('calendar.task.mytask')
          ->with('my_tasks', $my_tasks)
                  ->with('my_subject', $my_subject);
   }
 }

// NEW TASK
public function newTask()
   {

            if (Auth::check()) {
            $my_subject = MySubject::where(function($query)
                {
                  return $query->where('user_id', Auth::user()->id);
                })
              ->orderBy('created_at', 'desc')
                ->paginate(10);

            return view ('calendar.task.new')
            ->with('my_subject', $my_subject);
          }
 }

// POST TASKS
   public function postTasks(Request $request)
   {
   $this->validate($request, [
     'task_title' => 'required',
     'task_subject' => 'required',
     'task_type' => 'required',
     'task_date' => 'required',
   ]);
   Auth::user()->MyTask()->create([
     'task_title' => $request->input('task_title'),
      'task_body' => $request->input('task_body'),
     'task_subject' => $request->input('task_subject'),
     'task_type' => $request->input('task_type'),
     'task_date' => $request->input('task_date'),
     'task_time' => $request->input('task_time'),

   ]);
   return redirect()->route('calendar');
  // dd('all ok');
    }
// GET A TASK
         public function gettask($id)
               {
                 $task = MyTask::findorFail($id);

                 if (is_null($task)) {

                   abort(404);
                 }
           return view('calendar.task.atask', compact('task'))
                         ->with('task', $task);

         }
// UPDATE TASKS
  public function updateTask (Request $request, $id ){
  $updateTask = MyTask::find($id);
       $this->validate($request, [
       'task_title' => 'required',
     'task_subject' => 'required',
     'task_range' => 'required',
     'task_date' => 'required',
     'task_time' => 'required',
  ]);
  $updateTask->update([
   'task_title' => $request->input('task_title'),
     'task_subject' => $request->input('task_subject'),
     'task_range' => $request->input('task_range'),
     'task_date' => $request->input('task_date'),
     'task_time' => $request->input('task_time'),
  ]);
        return redirect()->route('calendar');

}

// DELETE TASKS

public function deleteTask ($id){
  $deleteTask = MyTask::find($id);
     $deleteTask->delete();
  return redirect()->route('calendar');
}

   // end of tasks





  // *
  // *REVIEW:
  // * EXAM FUNCTION BEGINS
  // *
  // *
  public function Exam()
   {
if (Auth::check()) {
    $my_exams = MyExam::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(30);
// SUBJECT
    $my_subject = MySubject::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(30);


            return view ('calendar.exam.exam')
->with('my_exams', $my_exams)
->with('my_subject', $my_subject);

}
}

// NEW EXAM
public function newExam()
   {

    if (Auth::check()) {
    $my_subject = MySubject::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(30);

            return view ('calendar.exam.new')
->with('my_subject', $my_subject);
}

 }


// POST EXAMS
   public function postExam(Request $request)
   {
   $this->validate($request, [
     'exam_subject' => 'required',
     'exam_date' => 'required',
     'exam_time' => 'required',
   ]);
   Auth::user()->MyExam()->create([
     'exam_subject' => $request->input('exam_subject'),
      'exam_seat' => $request->input('exam_seat'),
     'exam_timer' => $request->input('exam_timer'),
     'exam_address' => $request->input('exam_address'),
     'exam_date' => $request->input('exam_date'),
     'exam_time' => $request->input('exam_time'),

   ]);

      return redirect()->route('calendar');
  // dd('all ok');
    }



// GET A Exams
         public function getExam($id)
               {
                 $exam = MyExam::findorFail($id);

                 if (is_null($exam)) {

                   abort(404);
                 }


// SUBJECT
    $my_subject = MySubject::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(30);


           return view('calendar.exam.aexam', compact('exam'))
                         ->with('exam', $exam)
                         ->with('my_subject', $my_subject);
;

         }
// UPDATE Exam
  public function updateExam (Request $request, $id ){
  $updateExam = MyExam::find($id);
       $this->validate($request, [
             'exam_subject' => 'required',
     'exam_date' => 'required',
     'exam_time' => 'required',
  ]);
  $updateExam->update([
        'exam_subject' => $request->input('exam_subject'),
      'exam_seat' => $request->input('exam_seat'),
     'exam_timer' => $request->input('exam_timer'),
     'exam_address' => $request->input('exam_address'),
     'exam_date' => $request->input('exam_date'),
     'exam_time' => $request->input('exam_time'),

  ]);
        return redirect()->route('calendar');

}

// DELETE Exam

public function deleteExam ($id){
  $deleteExam = MyExam::find($id);
     $deleteExam->delete();
  return redirect()->route('calendar');
}

   // end of exams



     // *
     // *REVIEW:
     // * CLASS FUNCTION BEGINS
     // *
     // *
     public function Class()
      {
   if (Auth::check()) {
       $my_class = MyClass::where(function($query)
           {
             return $query->where('user_id', Auth::user()->id);
           })
         ->orderBy('created_at', 'desc')
           ->paginate(30);
   // SUBJECT
       $my_subject = MySubject::where(function($query)
           {
             return $query->where('user_id', Auth::user()->id);
           })
         ->orderBy('created_at', 'desc')
           ->paginate(30);


               return view ('calendar.class.class')
   ->with('my_class', $my_class)
   ->with('my_subject', $my_subject);

   }
   }

   // NEW Class
   public function newClass()
      {

       if (Auth::check()) {
       $my_subject = MySubject::where(function($query)
           {
             return $query->where('user_id', Auth::user()->id);
           })
         ->orderBy('created_at', 'desc')
           ->paginate(30);

               return view ('calendar.class.new')
   ->with('my_subject', $my_subject);
   }

    }


   // POST ClassS
      public function postClass(Request $request)
      {
      $this->validate($request, [
        'class_subject' => 'required',
        'class_date' => 'required',
        'class_time' => 'required',
      ]);
      Auth::user()->MyClass()->create([
        'class_subject' => $request->input('class_subject'),
        'class_date' => $request->input('class_date'),
        'class_time' => $request->input('class_time'),

      ]);

         return redirect()->route('calendar');
     // dd('all ok');
       }



   // GET A Classs
            public function getClass($id)
                  {
                    $class = MyClass::findorFail($id);

                    if (is_null($class)) {

                      abort(404);
                    }


   // SUBJECT
       $my_subject = MySubject::where(function($query)
           {
             return $query->where('user_id', Auth::user()->id);
           })
         ->orderBy('created_at', 'desc')
           ->paginate(30);


              return view('calendar.class.aclass', compact('class'))
                            ->with('class', $class)
                            ->with('my_subject', $my_subject);
   ;

            }
   // UPDATE Class
     public function updateClass (Request $request, $id ){
     $updateClass = MyClass::find($id);
          $this->validate($request, [
        'class_subject' => 'required',
        'class_date' => 'required',
        'class_time' => 'required',
     ]);
     $updateClass->update([
       'class_subject' => $request->input('class_subject'),
        'class_date' => $request->input('class_date'),
        'class_time' => $request->input('class_time'),

     ]);
           return redirect()->route('calendar');

   }

   // DELETE Class

   public function deleteClass ($id){
     $deleteClass = MyClass::find($id);
        $deleteClass->delete();
     return redirect()->route('calendar');
   }

      // end of Classs





  // *
  // *REVIEW:
  // * SUBJECT FUNCTION BEGINS
  // *
  // *
  public function Subject()
   {
if (Auth::check()) {
    $my_subject = MySubject::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(30);

            return view ('calendar.subject.mysubject')
->with('my_subject', $my_subject);
}


 }

// POST subject
   public function postSubject(Request $request)
   {
   $this->validate($request, [
     'subject' => 'required',
   ]);
   Auth::user()->MySubject()->create([
     'subject' => $request->input('subject'),

   ]);

      return redirect()->route('calendar');
  // dd('all ok');
    }



// GET A SUBJECT
         public function getSubject($id)
               {
                 $subject = MySubject::findorFail($id);

                 if (is_null($subject)) {

                   abort(404);
                 }
           return view('calendar.subject.asubject', compact('subject'))
                         ->with('subject', $subject);

         }
// UPDATE SUBJECT
  public function updateSubject (Request $request, $id ){
  $updateSubject = MySubject::find($id);
       $this->validate($request, [
             'subject' => 'required',
   ]);
  $updateSubject->update([
     'subject' => $request->input('subject'),

  ]);
        return redirect()->route('calendar');

}

// DELETE SUBJECT

public function deleteSubject ($id){
  $deleteSubject = MySubject::find($id);
     $deleteSubject->delete();
  return redirect()->route('calendar');
}

   // end of SUBJECT

  // *
  // *REVIEW:
  // * TIMELIME UPDATE FUNCTION BEGINS
  // *
  // *


  public function Timeline()
   {
     if (Auth::check()) {
      //task
              $my_tasks = MyTask::where(function($query)
                  {
                    return $query->where('user_id', Auth::user()->id);
                  })
              ->orderBy('created_at', 'desc')
                  ->paginate(2);
        //exam
                      $my_exams = MyExam::where(function($query)
        {
          return $query->where('user_id', Auth::user()->id);
        })
      ->orderBy('created_at', 'desc')
        ->paginate(30);

            return view ('calendar.timeline')
          ->with('my_tasks', $my_tasks)
          ->with('my_exams', $my_exams);
   }
 }

//   /**
//   *REVIEW:
//   * THE POST OF USERS SELECTED SECTION
//   *
//   **/
//    public function postSection(Request $request)
//    {
//    $this->validate($request, [
//      'section' => 'required',
//    ]);
//    Auth::user()->calendar()->create([
//      'section' => $request->input('section'),
//    ]);
//    return redirect()->route('calendar')
//     ->with('signupsuccess', 'section saved');
//   //  dd('all ok');
//     }

//   /**
//   *REVIEW:
//   * THE cALENDAR INDEX VIEW
//   *
//   **/

//  public function index()
//    {
//       $title ='My Calendar';
//     $skiSearch = false;
//     $skiSearch_placehold = "";

// // NOTE:: PULLING CALENDAR SECTION OF THE USER AS SELECTED ONE
//       if (Auth::check()) {
//               $cal_section = Calendar::where(function($query)
//                   {
//                     return $query->where('user_id', Auth::user()->id);
//                   })
//                   ->paginate(1);

//           return view ('calendar.index')
//           ->with('cal_section', $cal_section)
//       ->with('title', $title)
//     ->with('skiSearch', $skiSearch)
//     ->with('skiSearch_placehold',   $skiSearch_placehold);
//    }
//  }


//   /**
//   *REVIEW:
//   * THE cALENDAR SETTINGS VIEW
//   *
//   **/

//  public function setting()
//    {
//       $title ='My Calendar settings';
//     $skiSearch = false;
//     $skiSearch_placehold = "";

// // NOTE:: PULLING CALENDAR SECTION OF THE USER AS SELECTED
//       if (Auth::check()) {
//               $cal_section = Calendar::where(function($query)
//                   {
//                     return $query->where('user_id', Auth::user()->id);
//                   })
//                   ->paginate(1);

//           return view ('calendar.setting')
//           ->with('cal_section', $cal_section)
//       ->with('title', $title)
//     ->with('skiSearch', $skiSearch)
//     ->with('skiSearch_placehold',   $skiSearch_placehold);
//    }
//  }


//  /**
//   *REVIEW:
//   *   THE LABEL VIEWS AND FUNTION BEGINS
//   *
//   **/
//    public function postLabel(Request $request)
//    {
//    $this->validate($request, [
//      'label' => 'required',
//    ]);
//    Auth::user()->label()->create([
//      'label' => $request->input('label'),
//    ]);
//    return redirect()->route('labels')
//     ->with('signupsuccess', 'label saved');
//    // dd('all ok');
//     }

// // THE LABEL INDEX WITH CALLED LABELS
//  public function getLabel()
//    {
//           $title ='My Calendar';
//     $skiSearch = false;
//     $skiSearch_placehold = "";
// // NOTE:: PULLING CALENDAR LABELS OF THE USER
//       if (Auth::check()) {
//               $cal_label = Label::where(function($query)
//                   {
//                     return $query->where('user_id', Auth::user()->id);
//                   })
//                   ->paginate();

//           return view ('calendar.label')
//           ->with('cal_label', $cal_label)
//           ->with('title', $title)
//     ->with('skiSearch', $skiSearch)
//     ->with('skiSearch_placehold',   $skiSearch_placehold);
//    }
//  }

// // THE LABEL AJAX
//  public function getLabelList()
//    {
//  // NOTE:: PULLING CALENDAR LABELS OF THE USER
//       if (Auth::check()) {
//               $cal_label = Label::where(function($query)
//                   {
//                     return $query->where('user_id', Auth::user()->id);
//                   })
//                   ->paginate();

//           return view ('calendar.label.ajax')
//           ->with('cal_label', $cal_label);
//    }
//  }

// /**
// *REVIEW:
// * DELETING A LABEL BASE ON ID
// *
// **/
// public function deleteLabel ($id){
//   $deletelabel = Label::find($id);
//      $deletelabel->delete();
//   return redirect()->to('/calendar/labels');
// }

// // END

// /**
// *REVIEW:
// * UPDATING A LABEL BASE ON ID
// *
// **/
// public function updateLabel (Request $request, $id ){
//   $updateLabel = label::find($id);
//        $this->validate($request, [
//        'label' => 'required',
//   ]);
//   $updateLabel->update([
//     'label' => $request->input('label'),
//   ]);
//         return redirect()->route('labels')->with('Ainote-created', 'label updated.');

// }



}
