<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cart;
use App\Models\Ongkir;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCo(){
        $this->data['cart'] = Cart::where('user_id','=',Auth::user()->id)->get();
        $this->data['ongkir'] = Ongkir::get();
        $this->data['grand_total'] = Cart::sum('total');

        return view('frontend.halcheckout.index',$this->data);
    }

    public function checkout($request){
        // $ongkir = Ongkir::find($request['shipment']->provinsi_id);
        // $total = Cart::where('user_id','=',Auth::user()->id)->get();
        $order = Orders::create([
            'user_id'=>Auth::user()->id,
            'provinsi_id'=>$request['shipment']->provinsi,
            'no_order' => 'MORF-'.date('Ymd').rand(1111,9999),
            'transaction_status' => 'pending',
            'token' => rand(1111,9999).'xxi'.rand(1111,9999),
            'kota'=>$request['shipment']->kota,
            'alamat'=>$request['shipment']->alamat,
            'keterangan'=>$request['shipment']->keterangan,
            'total'=>$request['transaction']->sum('total'),
        ]);
        // $this->requestPayment($order);
        return $order;
    }

    public function saveCheckout(Request $request)
    {
        $this->data['cart'] = Cart::where('user_id','=',Auth::user()->id)->get();
        $this->data['ongkir'] = Ongkir::get();
        $this->data['grand_total'] = Cart::sum('total');

        return view('frontend.halcheckout.showSnap', $this->data);

        // if (Cart::where('user_id','=',Auth::user()->id)->count()>0) {
        //     $this->data['transaction'] = Cart::where('user_id','=',Auth::user()->id)->get();
        //     $this->data['shipment'] = $request;
        //     $transaction = Cart::where('user_id','=',Auth::user()->id)->get();
        //     $order_id = $this->checkout($this->data);
        //     foreach ($transaction as $key => $value) {
        //         app('App\Http\Controllers\Admin\OrderDetailController')->store($value,$order_id->id);
        //         Cart::where('id', $value->id)->delete();
        //     }
        //     // return $this->confirmation();
        // }
        // else {
        //     // return redirect()->back();
        // }
    }

    public function reqPayment(){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-ndDjR6SNFmFuUZGcmpk69EMb';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 25000,
            ),
            'item_details' => array(
                [
                    'id' => '1',
                    'price' => '10000',
                    'quantity' => 1,
                    'name' => 'Tees Anchor'
                ],
                [
                    'id' => '2',
                    'price' => '10000',
                    'quantity' => 1,
                    'name' => 'Tees Basic'
                ]
                ),
            'customer_details' => array(
                'first_name' => 'morfeen',
                'last_name' => 'thirteen',
                'email' => 'morfeen13@gmail.com',
                'phone' => '088741164285',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // return $snapToken;
        return view('frontend.halcheckout.snap', ['token' => $snapToken]);
    }
}
