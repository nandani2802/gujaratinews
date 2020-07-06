<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NavController extends Controller
{
    public function index()
    {
    	$Category = DB::select('select * from categories');
    	$SubCategory = DB::select('select * from scategories');
    	
        return view('index')->with('Catdata',$Category)->with('Adata',$SubCategory);
       // return view('about')->with('data',$Category);
    }
}
