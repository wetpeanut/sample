<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;	

class categoryController extends Controller
{
    //


     public function index()
    {
        $category = Category::all()->toArray();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
}
