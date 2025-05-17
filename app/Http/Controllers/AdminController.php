<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\buyerprofile;
use App\Models\Sellerprofile;
use App\Models\buy;
use App\Models\Succesfuldelivery;
use App\Models\UnSuccesfuldelivery;
use App\Models\contactmessage;



use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userdetails(){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){
                $users = User::get();
                return view('admin/userdetails',compact('users'));              
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }   
    }




    // skjhfajsa



    public function productdetails(){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){
                $products = Product::where('is_verified',NULL)->get();
                $productss = Product::whereNotNull('is_verified')->get();
                return view('admin/productdetails',compact('products','productss'));
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }







    public function registerseller(){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                $users = Sellerprofile::where('is_verified',NULL)->whereNotNull('email')->get();
                
                $sellers= Sellerprofile::where('is_verified',1)->get();
                return view('admin/registerseller',compact('users','sellers'));
    
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }


    }


    public function registeredbuyer(){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                
                $users = buyerprofile::where('is_verified',NULL)->whereNotNull('email',)->get();
                $buyers= Sellerprofile::where('is_verified',1)->get();
        
                return view('admin/registerbuyer',compact('users','buyers'));
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }







    public function verifyproduct($id){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                $a =1;
                
                Product::where('id', $id)->update([
        
                    'is_verified' => $a,
        
                ]);
                return redirect('/admin_product_details');
                
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }








    public function verifyseller($id){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                
                Sellerprofile::where('id', $id)->update([
        
                    'is_verified' => 1,
        
                ]);
                return redirect('/reg_seller');
                
                
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }







    public function verifybuyer($id){


        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                $a =1;
                
                buyerprofile::where('id', $id)->update([
        
                    'is_verified' => $a,
        
                ]);
                return redirect('/reg_buyer');
                
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }








    public function unverifyproduct($id){
        if(auth()->user()){
            if(auth()->user()->is_admin==1){
                Product::where('id', $id)->update([
                    'is_verified' => NULL,
                ]);
                return redirect('/admin_product_details');      
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }


    public function unverifyseller($id){
        if(auth()->user()){
            if(auth()->user()->is_admin==1){       
                
                Sellerprofile::where('id', $id)->update([
        
                    'is_verified' => NULL,
        
                ]);
                return redirect('/reg_seller');
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }





    public function unverifybuyer($id){

        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                buyerprofile::where('id', $id)->update([
        
                    'is_verified' => NULL,
        
                ]);
                return redirect('/reg_buyer');
                
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
    }









    public function seeorders(){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                
                $orders= buy::get();
                
        
                    return view('admin/orders',compact('orders'));
             
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }

    }













    public function successfulorder(Request $request){
        if(auth()->user()){

            if(auth()->user()->is_admin==1){
                $buy = buy::where('user_id', $request->user_id)->where('product_id',$request->product_id);
                $buy->delete();
               
        $available= Product::where('id',$request->product_id)->pluck('quantity');
        foreach($available as $available)  ///cause available is a fucking array
         {
           
             $left=$available-$request->quantity;
             
            
            Product::where('id',$request->product_id)->update([
                
                'quantity'=>$left,
                ]
            );
            Succesfuldelivery::create([
                
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'quantity' =>$request->quantity,
                ]);
                return redirect('/orders');
            }

                
                
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
        
    }


















    public function unsuccessfulorder(Request $request){




        if(auth()->user()){

            if(auth()->user()->is_admin==1){

                
                
                $buy =        buy::where('user_id', $request->user_id)->where('product_id',$request->product_id);
                $buy->delete();
                UnSuccesfuldelivery::create([
                
                    'user_id' => $request->user_id,
                    'product_id' => $request->product_id,
                    'quantity' =>$request->quantity,
                ]);
                
                        return redirect('/orders');
                
                
                
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return redirect('/home');
        }
        
        
            }
    

            public function seemessage(){
                
                $messages=contactmessage::get();
         
                return view('admin.message', compact('messages'));
            }


}




