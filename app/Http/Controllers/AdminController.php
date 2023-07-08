<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function Termwind\ValueObjects\p;

class AdminController extends Controller
{
    function admin(){
        return view('backend.admin-dashboard');
    }
    function creteProduct(){
        $category = Category::all();
        return view('backend.add-product',['categorys'=>$category]);
    }
    function storeProduct(Request $req){

        Product::storeOProduct($req);
        return redirect('/add-product')->with('msg', 'Successfully');
    }
    public function manageProduct(){
        $allProduct = new Product();
        return view('backend.manage-product',['products'=>$allProduct->all()]);
    }
    public function seeDetails($id){
        $product=Product::find($id);
        return view('backend.product-details',['details'=>$product]);
    }
    public function deleteProduct($id){
        Product::deleteSproduct($id);
        return redirect('/manage-product');
    }
    public function editProduct($id){
        $product=Product::find($id);
        return view('backend.edit-product',['product'=>$product]);
    }
    public function putEditData(Request $request,$id){
        Product::editSProduct($request,$id);
        return redirect('/manage-product');
    }
    public function addCategory(){
        $category = Category::all();
        return view('backend.add-category',['categorys'=>$category]);
    }
    public function storeCategory(Request $request){
        Category::storeOCategory($request);
        return redirect('add-category')->with('msg','category Added Successfully');
    }

}
