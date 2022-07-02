<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function store(Request $request)
    {
        $cart = Cart::create([
            'user_id' => Auth::user()->id,
            'barang_id' => $request->barang_id,
            'ukuran' => $request->ukuran,
            'qty'=>$request->qty,
            'total'=>$request->qty * $request->harga,
        ]);
        return redirect('/cart');
    }

    public function cart(){
        $this->data['cart'] = Cart::where('user_id','=',Auth::user()->id)->paginate(10);
        $this->data['grand_total'] = Cart::sum('total');

        return view('frontend.halkeranjang.index', $this->data);
    }

    public function updateCartQty(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
}
