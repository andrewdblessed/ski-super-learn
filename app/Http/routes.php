<?php


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
   Route::get('/signup',[
     'uses' => '\Skilearn\Http\controllers\AuthController@getSignup',
     'as' => 'auth.signup',
     'middleware' => ['guest'],
   ]);

   Route::post('/signup',[
     'uses' => '\Skilearn\Http\controllers\AuthController@postSignup',
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


     Route::get('/signout',[
     'uses' => '\Skilearn\Http\controllers\AuthController@getSignout',
         'as' => 'auth.signout',
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
// NOTE: NOTEBOOKS SECTION
Route::get('/notebooks', [
'uses' => '\Skilearn\Http\controllers\NotebookController@index',
'as'  => 'dashboard.notebook.index',
'middleware' => ['auth'],
]);
Route::get('/notebooks/call_all', [
'uses' => '\Skilearn\Http\controllers\NotebookController@allNotebooks',
'as'  => 'dashboard.notebook.allnotebook',
'middleware' => ['auth'],
]);
Route::get('/notebooks/allnb', [
'uses' => '\Skilearn\Http\controllers\NotebookController@allnb',
'as'  => 'nbmanager.allnb',
'middleware' => ['auth'],
]);
Route::get('/notebooks/manager', [
'uses' => '\Skilearn\Http\controllers\NotebookController@notebookManager',
'as'  => 'nbmanager',
'middleware' => ['auth'],
]);

Route::get('/notebooks/callnotes', [
'uses' => '\Skilearn\Http\controllers\NotebookController@getallnote',
'as'  => 'dashboard.notebook.allnote',
'middleware' => ['auth'],
]);

Route::post('/notebookpost',[
  'uses' => '\Skilearn\Http\Controllers\NotebookController@postNotebooks',
  'as' => 'notebooks.post',
  'middleware' => ['auth'],
]);

Route::post('/updatenotebook{id}', [
'uses' => '\Skilearn\Http\controllers\NotebookController@updateNotebook',
'as' => 'updatenotebook',
'middleware' => ['auth'],
]);

Route::get('/deletenotebook{id}', [
'uses' => '\Skilearn\Http\controllers\NotebookController@deleteNotebook',
'as' => 'deletenotebook',
'middleware' => ['auth'],
]);

// XXX: new notebook note post route
Route::post('/note_post',[
  'uses' => '\Skilearn\Http\Controllers\NotebookController@postNote',
  'as' => 'post.note',
  'middleware' => ['auth'],
]);

Route::post('/updatenote{id}', [
'uses' => '\Skilearn\Http\controllers\NotebookController@updateNote',
'as' => 'updatenote',
'middleware' => ['auth'],
]);

Route::get('/deletenote{id}', [
'uses' => '\Skilearn\Http\controllers\NotebookController@deleteNote',
'as' => 'deletenote',
'middleware' => ['auth'],
]);

Route::get('/trashnotes/{notebook_id}', [
'uses' => '\Skilearn\Http\controllers\NotebookController@Trashnotes',
'as' => 'trashnotes',
'middleware' => ['auth'],
]);
// end

Route::get('/shownotes', [
'uses' => '\Skilearn\Http\controllers\NotebookController@note_all',
'as'  => 'showall',
'middleware' => ['auth'],
]);
Route::get('/notebooks/{id}',[
'uses' => '\Skilearn\Http\controllers\NotebookController@getaNotebook',
'as' => 'dashboard.notebook.anotebook',
'middleware' => ['auth'],
]);

Route::get('/notesnew',[
'uses' => '\Skilearn\Http\controllers\NotebookController@makeNotes',
    'as' => 'newnote',
      'middleware' => ['auth'],
]);

Route::get('/notenew/{id}',[
'uses' => '\Skilearn\Http\controllers\NotebookController@newNote',
    'as' => 'dashboard.notes.newnote',
      'middleware' => ['auth'],
]);

//NOTE: LOADING THE NOTE WITH A NOTEBOOK ID
Route::get('/notebooks/{id}',[
'uses' => '\Skilearn\Http\controllers\NotebookController@getaNotebook',
'as' => 'dashboard.notebook.anotebook',
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
Route::post('/notepost',[
  'uses' => '\Skilearn\Http\Controllers\NotesController@postNotes',
  'as' => 'notes.post',
  'middleware' => ['auth'],
]);

Route::post('/noteupdate',[
  'uses' => '\Skilearn\Http\Controllers\NotesController@updateNotes',
  'as' => 'notes.update',
  'middleware' => ['auth'],
]);

Route::get('/notes/{id}',[
'uses' => '\Skilearn\Http\controllers\NotebookController@getaNote',
    'as' => 'dashboard.notes.view',
      'middleware' => ['auth'],
]);


Route::get('/guest_note/{guest_token}',[
'uses' => '\Skilearn\Http\controllers\NotebookController@getguestNote',
'as' => 'guest.note',

]);

// HACK STUDENT ENDS
// HACK Adela Begins
Route::get('/adela/about', [
'uses' => '\Skilearn\Http\controllers\AdelaController@load_adela_about',
'as'  => 'adela.about',
// HACK for guests
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
// REVIEW://do not remove the closing tags below
});
