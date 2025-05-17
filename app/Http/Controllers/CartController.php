<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Buy;

class CartController extends Controller
{
    public function index(){
        if(auth()->user()->cart){

            $cart = auth()->user()->cart->get();
            $carts = auth()->user()->cart->pluck('product_id');
            $product = Product::wherein('id',$carts)->get();
            
            
            return view('cart',compact('cart','product'));
        }
        else{
            return redirect()->route('home');
        }
    }
    // public function available($request){
    //  return 
    // }
    public function store(Request $request){
        $user_id =auth()->user()->id;
        $product_id=$request->product_id;
        
        Cart::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            
            ]);
            return redirect('/cart');
         
    }
    public function buy(Request $request){
        if($request->quantity>0){



            $user =auth()->user()->id;
            $product_id=$request->product;
            
            $quantity = Product::where('id',$product_id)->pluck('quantity');
            
            foreach($quantity as $quantity){   ///cause quantity is a fucking array and need as a int
                
                if($quantity>=$request->quantity){
                    Buy::create([
                        'user_id' => $user,
                        'product_id' => $request->product,
                        'quantity' =>$request->quantity,
                        
                        ]);
                        $boughtproduct = Cart::where('product_id',$request->product)->where('user_id',$user);
                        $boughtproduct->delete();
                        return redirect('/cart');
                        
                    }
                    else{
                        $message= "please order less";
                        $product = Product::where('id',$product_id)->get();
                        
                        return redirect('/cart');
                    }
    }
}
    else{
        return redirect('/cart');
    }
}
}
