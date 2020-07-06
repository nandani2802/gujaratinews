<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    

    // public function create()
    // {
    //     return view('contact.index');
    //     //
    // }

    public function index(Request $request)
    {
    	$contact =  new contact([
            'name' => $request->post('name'),
            'pno' => $request->post('pno'),
            'email' => $request->post('email'),
            'description' => $request->post('message')
        ]);
        $contact->save();
        return redirect('/contact')->with('success', 'Message sent Successfully!');
    }
}
