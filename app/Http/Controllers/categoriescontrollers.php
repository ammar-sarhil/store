<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class categoriescontrollers extends Controller
{
    public function showAllCategories(){
        $categories=Categories::all();
        // dd($categories);
        return view('welcome',compact('categories'));
    }
  
}
