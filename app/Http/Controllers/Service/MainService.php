<?php

namespace App\Http\Controllers\Service;

use App\Models\Product;
use Illuminate\Http\Request;

class MainService
{
    public static function GetProduct()
    {
        return Product::all();
    }
    public static function AddProduct(Request $request)
    {
        $tmp = new Product();
        $tmp->name = $request->name;
        $tmp->qty = $request->qty;
        $tmp->price = $request->price;
        $tmp->desc = $request->desc;

        $tmp->save();

        return Product::all();
    }
    public static function UpdateProduct(Request $request)
    {
        $tmp = Product::find($request->id);
        $tmp->name = $request->name;
        $tmp->qty = $request->qty;
        $tmp->price = $request->price;
        $tmp->desc = $request->desc;

        $tmp->save();

        return Product::all();
    }
    public static function DeleteProduct(Request $request)
    {
        $tmp = Product::find($request->id);
        $tmp -> delete();

        return Product::all();
    }
}
