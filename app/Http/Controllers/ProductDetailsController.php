<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProductDetailsController extends Controller
{
    
    function product(){
        return view('productdetails');
    }
    
    function productshow(){
        $productdetail = DB::select('Select * from productdetails');
        return view('productdetails', ['productdetail'=>$productdetail]);
    }
}
