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
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

// USING THE USER MODEL TO CALL USER DETAILS
use Skilearn\Models\User;
use Skilearn\Models\Calendar;
use Skilearn\Models\Label;


class ApiController extends Controller
{
    //

public function index(){
	$hello = "api variable works great";
	return $hello;
}



public function Calendar()
{
	  $cal_section = Calendar::where(function($query){
	  	return $query;
	  });
               
      return with($cal_section);
}



// 
// 
}

