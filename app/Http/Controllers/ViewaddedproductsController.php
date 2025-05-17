<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewaddedproductsController extends Controller
{
    public function index()
    {
        $products = auth()->user()->product;
        return view('viewaddedproducts',compact('products'));
    }
}
