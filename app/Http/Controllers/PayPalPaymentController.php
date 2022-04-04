<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Srmklive\PayPal\Facades\PayPal;
// use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalPaymentController extends Controller
{
    public function handlePayment(){
        $product = [];
        $product['items'] = [

        [
        'name' => 'Nike Joyride 2',
        'price' => 112,
        'desc'  => 'Running shoes for Men',
        'qty' => 2
        ]

        ];

        $product['invoice_id'] = 1;
        $product['invoice_description'] = "Order#{$product['invoice_id']} Bill";
        $product['return_url'] = route('success.payment');
        $product['cancel_url'] = route('cancel.payment');
        $product['total'] = 224;

        $paypalModule = PayPal::setProvider('express_checkout');
        $res = $paypalModule->setExpressCheckout($product);
        $res = $paypalModule->setExpressCheckout($product, true);

        return redirect($res['paypal_link']);
    }

    public function paymentCancel(){
        dd('Your payment has been decland. The payment cacneltaion page goes here!');
    }

    public function paymentSuccess(Request $request){
        $paypalModule = PayPal::setProvider('express_checkout');
        $response = $paypalModule -> getExpressCheckoutDetails($request -> token);

        if(in_array(strtoupper($response['ACK']),['SUCCESS', 'SUCCESSWITHWARNING'])){
            dd('Payment was succesfull. The payment success page goes here!');
        }

        dd('Error occured!');
    }
}