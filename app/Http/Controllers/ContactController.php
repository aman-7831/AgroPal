<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactmessage;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store (Request $request)
    {
        contactmessage:: create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $request->message,
        ]);
        
        

        return redirect('/home'); 

    }
}
