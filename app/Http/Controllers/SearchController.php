<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use App\productdetail;

class SearchController extends Controller
{
    function search(){
        $q = Request::get('q');
        if($q != ' '){
            $productcode = productdetail::where('productcode', 'LIKE', '%' . $q . '%')
                                            ->get();
            if(count($productcode) > 0)
                return view('customer')->withDetails($productcode)->withQuery($q);
        }
        return view('customer')->withMessage("No Product Code Found in Database! Try Again.");
    }
}
