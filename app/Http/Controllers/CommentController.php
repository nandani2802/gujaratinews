<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index(Request $request)
    {
    	$Comment =  new feedback([
    		'Description' => $request->post('message'),
            'Name' => $request->post('name'),
            'Email' => $request->post('email'),
            
        ]);
        $Comment->save();
        return redirect('/news');
    }
}
