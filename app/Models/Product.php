<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    static $blog, $image, $directory, $imageName, $imageNew;
    static function imageUrl($imagedata){
        self::$image = $imagedata->file('img');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    static function storeOProduct($req){
        $product = new Product();
        $product->name = $req->name;
        $product->category_name = $req->category_name;
        $product->brand_name = $req->brand_name;
        $product->description = $req->desp;
        $product->img = Product::imageUrl($req);
        $product->save();
    }
    static function deleteSproduct($id){
        $product=Product::find($id);
        if(file_exists($product->img)){
            unlink($product->img);
        }
        $product->delete();
    }
    static function editSProduct($req,$id){
        $product = Product::find($id);
        if($req->file('img')){
            if(file_exists($product->img)){
                unlink($product->img);
            }
            self::$imageNew = self::imageUrl($req);
        }else{
            self::$imageNew = $product->img;
        }
        $product->name = $req->name;
        $product->category_name = $req->category_name;
        $product->brand_name = $req->brand_name;
        $product->description = $req->desp;
        $product->img = self::$imageNew ;
        $product->save();
    }
}
