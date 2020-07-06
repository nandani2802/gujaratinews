<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
    	
    	$VideoData = DB::select('select * from videos where date_format(created_at, "%Y-%m-%d") = date_format(now(),"%Y-%m-%d") ');
    	
        return view('index')->with('Videodata',$VideoData);
       
    }
}
