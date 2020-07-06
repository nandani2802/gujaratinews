<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\covidtbl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CovidController extends Controller
{
    public function index(Request $request)
    {
    	$anm = $request->input('anm');
    	$CaseData = DB::select("select * from covidtbls where area = '$anm' ");
    	
        return view('covid')->with('casedata',$CaseData);
       
    }
}
