<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtoCart(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            echo "<pre>"; print_r($data);
        }

        // return view('frontend.halkeranjang.index');
    }
}
