<?php

namespace Skilearn\Http\Controllers;


/**
*REVIEW:
* THIS CONTROLELR CONTROLS OUR Cloudpack SECTION
*
**/
use Auth;

//USING HTTP REQUEST TO MAKE REQUEST
use Illuminate\Http\Request;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;

// USING THE CloudUploder MODEL TO CALL FILES NAME BASE ON USER ID  DETAILS
use Skilearn\Models\CloudUploder;

// USING THE LARAVEL STORAGE TO STORE AND CALL FILES
use \Storage;

// USING THE LARAVEL CONTROLLERS TO VALIDATE
// use App\Http\Controllers\controller;

//CALLING THE CLOUD MODEL TO CALL USER CLOUD STORED ITEMS

/**
 *
 */
class CloudpackController extends controller
  {




    public function Cloudpack()
    {
      $title ='Cloud Pack';
          $skiSearch = true;
    $skiSearch_placehold = "Search your cloud items";


return view ('dashboard.cloudpack')
 ->with('title', $title)
    ->with('skiSearch', $skiSearch)
    ->with('skiSearch_placehold',   $skiSearch_placehold);
    }

    public function Cloudtest() {
      $title ='Cloud Pack';
          $skiSearch = true;
    $skiSearch_placehold = "Search your cloud items";
  if (Auth::check()) {
      // $files = CloudUploder::all();
      $files = CloudUploder::where(function($query)
          {
            return $query->where('user_id', Auth::user()->id);
          })
          ->orderBy('created_at', 'desc')
          ->paginate();
          // dd($Ainote_all);
      return view ('cloudload.uploadtest')

      ->with('title', $title)
         ->with('skiSearch', $skiSearch)
         ->with('skiSearch_placehold',   $skiSearch_placehold)

      ->with('files', $files);
      }
      }

    public function handleupload(Request $request)
    {

      // if ($request->hasFile('file')) {
        $file = $request->file('file');
        $allowedFileTypes = config('app.allowedFileTypes');
        $maxFileSize = config('app.maxFileSize');
        $rules= [
            'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
        ];
        $this->validate($request, $rules);
        $filename = $file->getClientOriginalName();
        $filetype = $file->getClientOriginalExtension();
        $filesize = $file->getSize();
        $destinationPath = config('app.fileDestinationPath').'/'.$filename;
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealpath()));

if ($uploaded) {
Auth::user()->CloudUploder()->create([
'filename' => $filename,
'filetype' => $filetype,
'filesize' => $filesize,
]);
}else {
        	return Response::json('error', 400);
        }

      // }
    return redirect()->to('/cloudtest');
    }

public function deleteFile($id){
  $file = CloudUploder::find($id);
    Storage::delete(config('app.fileDestinationPath').'/'.$file->filename);
    $file->delete();
  return redirect()->to('/cloudpack');
}

/**
*REVIEW:
* getting cloud uploads
*
**/
public function GetUpload()
    {
            $title ='Upload a file';

      return view ('cloudload.cloudupload') ->with('title', $title);
    }

/**
*REVIEW:
* getting a specific file
*
**/
public function Getfile()
    {
            $title ='Upload a file';

      return view ('cloudload.cloudupload') ->with('title', $title);
    }

 /**
         *REVIEW:
         *get a file by the id of the file//
         *results are pulledin with javascript
         **/
              public function getafile($id)
               {
                 $file = CloudUploder::findorFail($id);

                 if (is_null($file)) {

                   abort(404);
                 }
                 return view('cloudload.cloudfile', compact('CloudFile'))
                         ->with('file', $file);

               }
         
         //END
/**
*REVIEW:
* Creating the setup tool for cloudpack
*
**/
public function Cloudsetup()
    {
      return view ('cloudload.cloudsetup');
    }

// REVIEW:// DO NOT REMOVE THE CLOSING TAGS BELOW
  }
