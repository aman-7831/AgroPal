<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sellerprofile;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user=auth()->user();
        return view('shop',compact('user'));

    }
    public function store(Request $request){
        $data =request()->validate([
            'companyname' => 'required',
            'pannumber'=>'required',
            'number'=>'required',
            'address'=>'required',
            'email'=>'required',

        ]);
            auth()->user()->sellerprofile->update([
            'companyname' => $request->companyname,
            'pannumber'=>$request->pannumber,
            'number'=>$request->number,
            'address'=>$request->address,
            'email'=>$request->email,
            'is_verified'=>NULL,
              ]);
              return redirect()->route('home');

        
    }
}
