<?php

namespace App;

use Illuminate\Http\Request;
//use Srmklive\PayPal\Services\ExpressCheckout;
class PaypalCheckout
{
    /* public function getExpressCheckout($orderId)
    {
        $cart=\Cart::session(auth()->id());
        $cartItems=array_map(function($item){
            return[
                'name' => $item['name'],
                'price' =>  $item['price'],
                'qty' =>  $item['quantity'],

            ];
        },$cart->getContent()->toArray());
        $checkoutData =[
            'items'=> $cartItems,
            'invoice_id'=> uniqid(),
            'invoice_description'=> "Descripcion del orden",
            'return_url'=> route('paypal.success',$orderId),
            'cancel_url'=>route('paypal.cancel'),
            'total'=>$cart->getTotal(),
        ];
    
        $provider = new ExpressCheckout;
        $response=$provider->setExpressCheckout( $checkoutData);
        return redirect($response['paypal_link']);
    }

    public function getExpressCheckoutSuccess(Request $request,$orderId){
        dd($request);

    }
    public function cancelPage(){
        dd("Cancelado");
    } */
}
