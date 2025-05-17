<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserdetailsController extends Controller
{
    public function index(){
        $user=auth()->user();
        return view('account',compact('user'));
    }
    
    public function account(Request $request){
       
        $data =request()->validate([
            'firstname' => 'required',
            'lastname'=>'required',
            'email'=>'required',
            'phonenumber'=>'required',
            'shippingaddress'=>'required',
            'billingaddress'=>'required',
            
            ]); 

            auth()->user()->buyerprofile->update([
            'firstname' => $request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'shippingaddress'=>$request->shippingaddress,
            'billingaddress'=>$request->billingaddress,
            'is_verified'=>NULL,
              ]);
              return redirect()->route('home');

        
    }
    }
