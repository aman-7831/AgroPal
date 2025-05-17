<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function Search(Request $request){
        $q=$request->search;
        $products = Product::where('name','LIKE','%'.$q.'%')->get();
        if(count((is_countable($products)?$products:[]))>0)
        return view('search',compact(['products','q']));
         else return view('search')->withMessage('product not found');
    }
}
