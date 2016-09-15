<?php

/***REVIEW
// SCRIPT WRITTEN TO HANDLE ROUTE FUNCUNALITY OF SKI LEARN WEB  BETA VERSION.
// THIS CODE IS WRITTEN BY ANDREW BEN RICHARD SCRIPT RECORD __ I CANT REMMBER CAME ALONG WITH GIT
// SCRIPT PIORITY IMPORTANT
// {{ I LOVE PEACE LIGHT}}
//REVIEW ENDS
***/

 Route::group(['middleware' => ['web',]], function () {



   // TODO: home
   Route::get('/', [
   'uses' => '\Skilearn\Http\controllers\HomeController@index',
   'as' => 'home',
   ]);
// IDEA: TEST DEMO
   Route::get('/test', [
     'uses' => '\Skilearn\Http\controllers\TestController@Editcode',
     'middleware' => ['auth'],
   ]);
   Route::get('/test/dropzone', [
     'uses' => '\Skilearn\Http\controllers\TestController@Dropezone',
     'middleware' => ['auth'],
   ]);
   Route::get('/wikisearch', [
     'uses' => '\Skilearn\Http\controllers\AdelaController@wiki',
     'middleware' => ['auth'],
   ]);
   // IDEA: TEST ENDS

   // TODO: Authentication
   Route::get('/basic',[
     'uses' => '\Skilearn\Http\controllers\AuthController@basicPlan',
          'as' => 'basicPlan',
   'middleware' => ['guest'],
   ]);

   Route::get('/pro',[
     'uses' => '\Skilearn\Http\controllers\AuthController@proPlan',
          'as' => 'proPlan',
   'middleware' => ['guest'],
   ]);

   Route::get('/premium',[
     'uses' => '\Skilearn\Http\controllers\AuthController@premiumPlan',
          'as' => 'premiumPlan',
   'middleware' => ['guest'],
   ]);

   Route::get('/signup',[
     'uses' => '\Skilearn\Http\controllers\AuthController@getSignup',
     'as' => 'auth.register',
     'middleware' => ['guest'],
   ]);
   Route::post('/auth/newuser',[
     'uses' => '\Skilearn\Http\controllers\AuthController@postSignup',
          'as' => 'auth.signup',
   'middleware' => ['guest'],
   ]);

   Route::get('/signin',[
     'uses' => '\Skilearn\Http\controllers\AuthController@getSignin',
     'as' => 'auth.signin',
'middleware' => ['guest'],
   ]);

   Route::post('/signin',[
     'uses' => '\Skilearn\Http\controllers\AuthController@postSignin',
   'middleware' => ['guest'],
   ]);

    // XXX: SOCIAL AUTH OF FACEBOOK
   Route::get('/facebook',[
    'uses' => '\Skilearn\Http\controllers\FacebookController@facebook'
    ]);
    Route::get('/callback',[
    'uses' => '\Skilearn\Http\controllers\FacebookController@callback'
    ]);

      // XXX: SOCIAL AUTH OF google
   Route::get('/google',[
    'uses' => '\Skilearn\Http\controllers\GoogleController@google',
    'as' => 'google.signin',
    ]);
    Route::get('/gooback',[
    'uses' => '\Skilearn\Http\controllers\GoogleController@gooback',
    'as' => 'auth.google',
    ]);

// XXX: LOG
     Route::get('/signout',[
     'uses' => '\Skilearn\Http\controllers\AuthController@getSignout',
         'as' => 'auth.signout',
   ]);

   // TODO:: PRICING TABLES
   Route::get('/plans',[
     'uses' => '\Skilearn\Http\controllers\AuthController@getpricing',
     'as' => 'auth.pricing',
     'middleware' => ['guest'],
   ]);
//Schools configuration Starts here VIEW
Route::get('/schools', [
'uses' => '\Skilearn\Http\controllers\SchoolsController@index',
  'as'  => 'school.landing',
]);

 // TODO: User Profile

     Route::get('/user/{username}',[
     'uses' => '\Skilearn\Http\controllers\ProfileController@getProfile',
         'as' => 'profile.index',
           'middleware' => ['auth'],
   ]);
                 // TODO: profile editget
       Route::get('/profile/edit',[
          'uses' => '\Skilearn\Http\controllers\ProfileController@getEdit',
        'as'  => 'profile.edit',
        'middleware' => ['auth'],
        ]);

        Route::post('/profile/edit',[
       'uses' => '\Skilearn\Http\controllers\ProfileController@postEdit',
     'middleware' => ['auth'],
     ]);

// HACK: subjects
Route::get('/subject', [
'uses' => '\Skilearn\Http\controllers\SectionController@getSubjectSection',
'as'  => 'section.subject',
'middleware' => ['auth'],
]);

Route::get('/section', [
'uses' => '\Skilearn\Http\controllers\SectionController@StudentSection',
'as'  => 'section.index',
'middleware' => ['auth'],
]);
Route::post('/sub',[
  'uses' => '\Skilearn\Http\Controllers\SubjectController@postSubject',
  'as' => 'subject.post',
  'middleware' => ['auth'],
]);

//HACK: settings
Route::get('/setting',[
  'uses' => '\Skilearn\Http\controllers\SettingsController@getSetting',
  'as'  => 'setting.index',
  'middleware' => ['auth'],

]);


// HACK: AJAX call
Route::get('/ajax_load_class', [
'uses' => '\Skilearn\Http\controllers\AjaxController@Ajax_Class',
'as' => 'ajax.class.index',
     'middleware' => ['auth'],
]);

// HACK: AJAX Dashboard tools begin
Route::get('/todo', [
'uses' => '\Skilearn\Http\controllers\TodoController@viewTodo',
'as'  => 'dashboard.todo',
'middleware' => ['auth'],
]);
Route::get('/todos/load', [
'uses' => '\Skilearn\Http\controllers\TodoController@ajaxTodo',
'as'  => 'dashboard.todos.todoload',
'middleware' => ['auth'],
]);
// HACK: POST TODOs
Route::post('/todopost', [
'uses' => '\Skilearn\Http\controllers\TodoController@postTodos',
'as'  => 'todos.post',
'middleware' => ['auth'],
]);

// HACK: DELETE TODOs
Route::post('/tododelete{todos}', [
'uses' => '\Skilearn\Http\controllers\TodoController@deleteTodos',
'as'  => 'todos.delete',
'middleware' => ['auth'],
]);


Route::get('/cloudpack', [
'uses' => '\Skilearn\Http\controllers\CloudpackController@Cloudpack',
'as'  => 'dashboard.cloudpack',
'middleware' => ['auth'],
]);


Route::post('/handleupload', [
'uses' => '\Skilearn\Http\controllers\CloudpackController@handleupload',
'middleware' => ['auth'],
]);

Route::get('/deletefile{id}', [
'uses' => '\Skilearn\Http\controllers\CloudpackController@deleteFile',
'as' => 'deletefile',
'middleware' => ['auth'],
]);

Route::get('/cloudtest', [
'uses' => '\Skilearn\Http\controllers\CloudpackController@Cloudtest',
'as'  => 'cloudtest',
'middleware' => ['auth'],
]);

Route::get('/cloudsetup', [
'uses' => '\Skilearn\Http\controllers\CloudpackController@Cloudsetup',
'as'  => 'cloudsetup',
'middleware' => ['auth'],
]);
// NOTE: AinoteS SECTION
Route::get('/Ainotes', [
'uses' => '\Skilearn\Http\controllers\AinoteController@index',
'as'  => 'dashboard.Ainote.index',
'middleware' => ['auth'],
]);
Route::get('/Ainotes/call_all', [
'uses' => '\Skilearn\Http\controllers\AinoteController@allAinotes',
'as'  => 'dashboard.Ainote.allAinote',
'middleware' => ['auth'],
]);
Route::get('/Ainotes/allnb', [
'uses' => '\Skilearn\Http\controllers\AinoteController@allnb',
'as'  => 'nbmanager.allnb',
'middleware' => ['auth'],
]);
Route::get('/Ainotes/manager', [
'uses' => '\Skilearn\Http\controllers\AinoteController@AinoteManager',
'as'  => 'nbmanager',
'middleware' => ['auth'],
]);

Route::get('/Ainotes/callnotes', [
'uses' => '\Skilearn\Http\controllers\AinoteController@getallnote',
'as'  => 'dashboard.Ainote.allnote',
'middleware' => ['auth'],
]);

Route::post('/Ainotepost',[
  'uses' => '\Skilearn\Http\Controllers\AinoteController@postAinotes',
  'as' => 'Ainotes.post',
  'middleware' => ['auth'],
]);

Route::post('/updateAinote{id}', [
'uses' => '\Skilearn\Http\controllers\AinoteController@updateAinote',
'as' => 'updateAinote',
'middleware' => ['auth'],
]);

Route::get('/deleteAinote{id}', [
'uses' => '\Skilearn\Http\controllers\AinoteController@deleteAinote',
'as' => 'deleteAinote',
'middleware' => ['auth'],
]);

// XXX: new Ainote note post route
Route::post('/note_post',[
  'uses' => '\Skilearn\Http\Controllers\AinoteController@postNote',
  'as' => 'post.note',
  'middleware' => ['auth'],
]);

Route::post('/updatenote{id}', [
'uses' => '\Skilearn\Http\controllers\AinoteController@updateNote',
'as' => 'updatenote',
'middleware' => ['auth'],
]);

Route::get('/deletenote{id}', [
'uses' => '\Skilearn\Http\controllers\AinoteController@deleteNote',
'as' => 'deletenote',
'middleware' => ['auth'],
]);

Route::get('/trashnotes/{Ainote_id}', [
'uses' => '\Skilearn\Http\controllers\AinoteController@Trashnotes',
'as' => 'trashnotes',
'middleware' => ['auth'],
]);
// end

Route::get('/shownotes', [
'uses' => '\Skilearn\Http\controllers\AinoteController@note_all',
'as'  => 'showall',
'middleware' => ['auth'],
]);
Route::get('/Ainotes/{id}',[
'uses' => '\Skilearn\Http\controllers\AinoteController@getaAinote',
'as' => 'dashboard.Ainote.aAinote',
'middleware' => ['auth'],
]);

Route::get('/notesnew',[
'uses' => '\Skilearn\Http\controllers\AinoteController@makeNotes',
    'as' => 'newnote',
      'middleware' => ['auth'],
]);

Route::get('/notenew/{id}',[
'uses' => '\Skilearn\Http\controllers\AinoteController@newNote',
    'as' => 'dashboard.notes.newnote',
      'middleware' => ['auth'],
]);

Route::get('/new_note_index',[
'uses' => '\Skilearn\Http\controllers\AinoteController@new_note_index',
'as' => 'dashboard.notes.newnote_index',
'middleware' => ['auth'],
]);

//NOTE: LOADING THE NOTE WITH A Ainote ID
Route::get('/Ainotes/{id}',[
'uses' => '\Skilearn\Http\controllers\AinoteController@getaAinote',
'as' => 'dashboard.Ainote.aAinote',
'middleware' => ['auth'],
]);

Route::get('/notes', [
'uses' => '\Skilearn\Http\controllers\NotesController@viewNotes',
'as'  => 'dashboard.notes',
'middleware' => ['auth'],
]);
//for ajax
Route::get('/notes/area', [
'uses' => '\Skilearn\Http\controllers\NotesController@Notes_area',
'as'  => 'dashboard.notes.notesload',
'middleware' => ['auth'],
]);
Route::get('/notes/{id}',[
'uses' => '\Skilearn\Http\controllers\AinoteController@getaNote',
    'as' => 'dashboard.notes.view',
      'middleware' => ['auth'],
]);


Route::get('/guest_note/{guest_token}',[
'uses' => '\Skilearn\Http\controllers\AinoteController@getguestNote',
'as' => 'guest.note',

]);

// HACK STUDENT ENDS
// HACK Adela Begins
Route::get('/adela/about', [
'uses' => '\Skilearn\Http\controllers\AdelaController@load_adela_about',
'as'  => 'adela.about',
// HACK for guests
]);

// HACK Adela Ai-notes querry
Route::get('/adela/query-ai-notes', [
'uses' => '\Skilearn\Http\controllers\AdelaController@getAi_note',
'as'  => 'query_ai',
]);
Route::post('/adelasetup',[
  'uses' => '\Skilearn\Http\Controllers\AdelaController@postAdela_settings',
  'as' => 'adela.setup.post',
  'middleware' => ['auth'],
]);

Route::post('/adelasetupupdate',[
  'uses' => '\Skilearn\Http\Controllers\AdelaController@postAdela_update',
  'as' => 'adela.setup.update',
  'middleware' => ['auth'],
]);
// REVIEW:// ADELA COLLETS EACH REQUESTED data
Route::post('/adelaquery',[
  'uses' => '\Skilearn\Http\Controllers\AdelaController@postAdela_query',
  'as' => 'adela.query',
  'middleware' => ['auth'],
]);

Route::get('/adela', [
'uses' => '\Skilearn\Http\controllers\AdelaController@load_adela',
'as'  => 'adela.index',
'middleware' => ['auth'],
]);


Route::get('/adela/settings', [
'uses' => '\Skilearn\Http\controllers\AdelaController@load_adela_settings',
'as'  => 'adela.settings',
'middleware' => ['auth'],
]);


// HACK Adela Ends
// REVIEW:// Exp Upgrading user levels
// users level 0
Route::post('/level',[
  'uses' => '\Skilearn\Http\Controllers\ExpController@postExp_up',
  'as' => 'exp.zero',
  'middleware' => ['auth'],
]);
//users upgrade ajax
Route::post('/levelupdate',[
  'uses' => '\Skilearn\Http\Controllers\ExpController@postExp_update',
  'as' => 'exp.up',
  'middleware' => ['auth'],
]);


//HACK: groups
Route::get('/community',[
  'uses' => '\Skilearn\Http\controllers\CommunityController@getCom_view',
  'as'  => 'group.index',
  'middleware' => ['auth'],

]);

//HACK: videso library
Route::get('/year',[
  'uses' => '\Skilearn\Http\controllers\YearController@getyear',
  'as'  => 'year.index',
  'middleware' => ['auth'],
]);

//for ajax vid
Route::get('/vid/hub', [
'uses' => '\Skilearn\Http\controllers\VidlibController@getvid_hub',
'as'  => 'vidlib.vidhub',
'middleware' => ['auth'],
]);

//for ajax vid
Route::get('/all/vid', [
'uses' => '\Skilearn\Http\controllers\VidlibController@getAll_vid',
'as'  => 'vidlib.vidload',
'middleware' => ['auth'],
]);
//for ajax library
Route::get('/all/lib', [
'uses' => '\Skilearn\Http\controllers\VidlibController@getAll_lib',
'as'  => 'vidlib.libload',
'middleware' => ['auth'],
]);

//ACADEMIC VIEW
Route::get('/academic', [
'uses' => '\Skilearn\Http\controllers\AcademicController@index',
'as'  => 'academic',
'middleware' => ['auth'],
]);

//Research VIEW
Route::get('/research', [
'uses' => '\Skilearn\Http\controllers\DeepResearchController@index',
  'as'  => 'research',
  'middleware' => ['auth'],
]);

//CALENDAR VIEW
Route::get('/calendar', [
'uses' => '\Skilearn\Http\controllers\CalendarController@index',
'as'  => 'calendar',
'middleware' => ['auth'],
]);

// CALENDAR MANAGER VIEW
Route::get('/calendar/settings', [
'uses' => '\Skilearn\Http\controllers\CalendarController@setting',
'as'  => 'cal.setting',
'middleware' => ['auth'],
]);

//calendar post
Route::post('/savesction',['uses' => '\Skilearn\Http\Controllers\CalendarController@postSection',
  'as' => 'post.section',
  'middleware' => ['auth'],
]);


// begin simple calendar
Route::get('/calendar/simple', [
'uses' => '\Skilearn\Http\controllers\SimpleCalendarController@simple',
'as'  => 'calendar.simple',
'middleware' => ['auth'],
]);
// begin simple calendar main viewer
Route::get('/calendar/simple/events', [
'uses' => '\Skilearn\Http\controllers\SimpleCalendarController@main',
'as'  => 'cal.sim.main',
'middleware' => ['auth'],
]);

//simple event post
Route::post('/simple_event',[
  'uses' => '\Skilearn\Http\Controllers\SimpleCalendarController@postSimpleCal',
  'as' => 'post.simple_event',
  'middleware' => ['auth'],
]);

//simple event update
Route::post('/simple/update_event/{id}',[
  'uses' => '\Skilearn\Http\Controllers\SimpleCalendarController@updateSimpleCal',
  'as' => 'post.simple_event',
  'middleware' => ['auth'],
]);

// simple event DELETE
Route::get('/simple/deleteevent{id}', [
'uses' => '\Skilearn\Http\controllers\SimpleCalendarController@deleteEvent',
'as' => 'delete.simple.event',
'middleware' => ['auth'],
]);

// begin simple calendar sidebar viewer
Route::get('/calendar/simple/sidebar', [
'uses' => '\Skilearn\Http\controllers\SimpleCalendarController@sidebar',
'as'  => 'cal.sim.sidebar',
'middleware' => ['auth'],
]);

// Getting a simple Event with the id

Route::get('simple-event/{id}',[
'uses' => '\Skilearn\Http\controllers\SimpleCalendarController@getEvent',
    'as' => 'dashboard.notes.view',
      'middleware' => ['auth'],
]);

// begin school calendar
Route::get('/calendar/school', [
'uses' => '\Skilearn\Http\controllers\SchoolCalendarController@school',
'as'  => 'calendar.school',
'middleware' => ['auth'],
]);
// begin school calendar main viewer
Route::get('/calendar/school/events', [
'uses' => '\Skilearn\Http\controllers\SchoolCalendarController@main',
'as'  => 'cal.sim.main',
'middleware' => ['auth'],
]);

//school year post
Route::post('/post/school_year',[
  'uses' => '\Skilearn\Http\Controllers\SchoolCalYearController@postSchoolYear',
  'as' => 'post.school_year',
  'middleware' => ['auth'],
]);

//school event post
Route::post('/school_event',[
  'uses' => '\Skilearn\Http\Controllers\SchoolCalendarController@postschoolCal',
  'as' => 'post.school_event',
  'middleware' => ['auth'],
]);

//school event update
Route::post('/school/update_event/{id}',[
  'uses' => '\Skilearn\Http\Controllers\SchoolCalendarController@updateschoolCal',
  'as' => 'post.school_event',
  'middleware' => ['auth'],
]);

// school event DELETE
Route::get('/school/deleteevent{id}', [
'uses' => '\Skilearn\Http\controllers\SchoolCalendarController@deleteEvent',
'as' => 'delete.school.event',
'middleware' => ['auth'],
]);

// begin school calendar sidebar viewer
Route::get('/calendar/school/sidebar', [
'uses' => '\Skilearn\Http\controllers\SchoolCalendarController@sidebar',
'as'  => 'cal.sim.sidebar',
'middleware' => ['auth'],
]);

// Getting a school Event with the id

Route::get('school-event/{id}',[
'uses' => '\Skilearn\Http\controllers\SchoolCalendarController@getEvent',
    'as' => 'dashboard.notes.view',
      'middleware' => ['auth'],
]);

// REVIEW:// LABEL DEFAULT VIEW BEGINS

Route::get('/calendar/labels',[
'uses' => '\Skilearn\Http\controllers\CalendarController@getLabel',
    'as' => 'labels',
      'middleware' => ['auth'],
]);
// REVIEW:// LABEL AJAX CALL BEGINS

Route::get('/calendar/label_list',[
'uses' => '\Skilearn\Http\controllers\CalendarController@getLabelList',
    'as' => 'label_list',
      'middleware' => ['auth'],
]);
//label post
Route::post('/post_label',[
  'uses' => '\Skilearn\Http\Controllers\CalendarController@postLabel',
  'as' => 'post.label',
  'middleware' => ['auth'],
]);

// LABEL DELETE
Route::get('/deletelabel{id}', [
'uses' => '\Skilearn\Http\controllers\CalendarController@deleteLabel',
'as' => 'deleteLabel',
'middleware' => ['auth'],
]);

//calendar update
Route::post('/update_label/{id}',[
  'uses' => '\Skilearn\Http\Controllers\CalendarController@updateLabel',
  'as' => 'update.label',
  'middleware' => ['auth'],
]);


  /**
  *REVIEW:
  * DOC SECTION
  *
  **/
// begin doc viewer
Route::get('/documentation', [
'uses' => '\Skilearn\Http\controllers\FeedbackController@index',
'as'  => 'doc',
]);

Route::post('/doc/signin',[
     'uses' => '\Skilearn\Http\controllers\FeedbackController@postDocin',
   'middleware' => ['guest'],
   ]);

// begin doc account viewer
Route::get('/doc/account', [
'uses' => '\Skilearn\Http\controllers\FeedbackController@account',
'as'  => 'doc',
]);




// REVIEW://do not remove the closing tags below
});
