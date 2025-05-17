<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sellerprofile;

class ProductsController extends Controller
{
    //
    
public function show($id){
    $product = Product::where('id',$id)->get();
    $message = NULL;
    return view('productdetails',compact('product','message'));
}

public function destroy(Request $request){
    
       $product_id = $request->product_id;
        $product = Product::where('id',$product_id);
        $product->delete();
        return redirect()->route('home');

}
public function edit(Request $request){   
    return view('edit',compact('request'));
    
}

public function create(){

    $id=auth()->user()->id;

     $seller=Sellerprofile::where('user_id', $id)->Pluck('is_verified');

     foreach($seller as $seller){
        
         if($seller==1){
             
             return view('create');
            }
            else{
                return redirect('/home');
            }
        }

}
    

    





    public function store(Request $request){
        $id=auth()->user()->id;

        $seller=Sellerprofile::where('user_id', $id)->Pluck('is_verified');
   
        foreach($seller as $seller){
   
   
       
       
            
            if($seller==1){
                
                $data =request()->validate([
                    'name' => 'required',
                    'quantity'=>'required',
                    'price'=>'required',
                    'description'=>'required',
                    'image'=>'required|image',
    
                ]);
                $imagePath = request('image')->store('upload','public');
                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
                $image->save();
    
    
    
    
                
        
                        Product::create([
                            'name' => $request->name,
                            'user_id'=> auth()-> user()->id,
                            'description'=>$request->description,
                            'price'=>$request->price,
                            'quantity'=>$request->quantity,
                            'image'=>$imagePath,
                              ]);
                              return redirect()->route('home');
               }
               else{
                   return redirect('/home');
               }
           }
   
        

           
        
                    }
                










                    
    public function update(Request $request){
    
$id=auth()->user()->id;

     $seller=Sellerprofile::where('user_id', $id)->Pluck('is_verified');

     foreach($seller as $seller){


    
    
         
         if($seller==1){
             
            $data =request()->validate([

                'name' => 'required',
                    'quantity'=>'required',
                    'price'=>'required',
                    'description'=>'required',
                    'image'=>'required|image',
    
            ]);
            $imagePath = request('image')->store('uploads','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();
    
    
                   
    
    $product_id = $request->product_id;
            
    
                    Product::where('id',$product_id)->update([
                        
                        'name' => $request->name,
                            'description'=>$request->description,
                            'price'=>$request->price,
                            'quantity'=>$request->quantity,
                            'image'=>$imagePath,
                          ]);
                          return redirect()->route('home');
        
    
            }
            else{
                return redirect('/home');
            }
        }
                       }

            }

