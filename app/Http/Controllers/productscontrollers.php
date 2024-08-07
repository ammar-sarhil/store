<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class productscontrollers extends Controller
{
    public function showAllProducts(){
        $products=Products::all();
        dd($products);
        return view('welcome',compact('products'));
    }
    //
}
