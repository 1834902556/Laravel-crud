<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    function index(){
       $products =  Product::all();
        return view('frontend.home', ['products' => $products]);
    }
    function category(){
        $categorys = Category::all();
        return view('frontend.category',['categorys'=>$categorys]);
    }
}
