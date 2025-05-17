<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                return view('dashboard');
                
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }
}
