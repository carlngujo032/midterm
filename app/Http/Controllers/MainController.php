<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\MainService;

class MainController extends Controller
{
    public function GetProduct(){
        return MainService::GetProduct();
    }
    public function AddProduct(Request $request){
        return MainService::AddProduct($request);
    }
    public function UpdateProduct(Request $request){
        return MainService::UpdateProduct($request);
    }
    public function DeleteProduct(Request $request){
        return MainService::DeleteProduct($request);
    }
}
