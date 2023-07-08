<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    static $category, $image, $directory, $imageName;
    static function imageUrl($imagedata){
        self::$image = $imagedata->file('img');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'category-image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    static function storeOCategory($req){
        $category = new Category();
        $category->category_name = $req->category_name;
        $category->category_description = $req->desp;
        $category->category_img = Product::imageUrl($req);
        $category->save();
    }
}
