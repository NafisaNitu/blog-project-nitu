<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

//    protected $guarded = [];

    protected static $product;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function addProduct($request)
    {
        self::$image = $request->file('product_image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$imageDirectory = 'assets/img/product/';
        self::$image->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;


        self::$product = new Product();
        self::$product->product_name          = $request->product_name;
        self::$product->category_name         = $request->category_name;
        self::$product->brand_name            = $request->brand_name;
        self::$product->product_price         = $request->product_price;
        self::$product->product_image         = self::$imageUrl;
        self::$product->product_description   = $request->product_description;
        self::$product->status                = 1;
        self::$product->save();
    }
}
