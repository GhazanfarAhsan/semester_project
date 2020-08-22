<?php

namespace App\Http\Middleware;

use Closure;

use App\Cart;
use App\CartDetail;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Carbon\Carbon;
use DateTime;

class CookieRedir
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if($this->getCookie($request) == null){
            
            $Cart = new Cart();
            $Cart->expiry_date =  Carbon::now()->addMonths(3);
            $Cart->save();

            $CartDetail = new CartDetail();
            $CartDetail->cart_id = $Cart->id;
            $CartDetail->product_id = $request->product_id;
            $CartDetail->qty = $request->prod_qty;
            $CartDetail->save();

            

            $dt = Carbon::createFromFormat('Y-m-d H:i:s', $Cart->expiry_date);
            $expiryMinutes = $dt->addMonths(3)->diffInMinutes($Cart->expiry_date);
            $cookie = $this->setcookie($Cart->id,$expiryMinutes);

            $response = $next($request);
            return $response->withCookie($cookie);



        } else {

            $this->setCartsItems($request,$this->getCookie($request));
           

        }

        return $next($request);
    }


    public function setCookie($cartId, $expiryMinutes){
       
        $cookie = cookie('SI_CartID',$cartId, $expiryMinutes);
        return $cookie;
    }

    public function getCookie($request){
        $value = $request->cookie('SI_CartID');
        return $value;
    }

    public function setCartsItems($request, $cartId = 0){

            
            $CartDetail  = CartDetail::where('cart_id',$cartId)->where('product_id',$request->product_id)->first();
       
            /*if($CartDetail == null){

                $CartDetail = new CartDetail();
                $CartDetail->cart_id = $cartId;
                $CartDetail->product_id = $request->product_id;
                $CartDetail->qty = $request->prod_qty;
                $CartDetail->save();

            } else {

                $CartDetail->cart_id = $cartId;
                $CartDetail->product_id = $request->product_id;
                $CartDetail->qty += $request->prod_qty;
                $CartDetail->save();
            }*/

            if($CartDetail == null){
                $CartDetail = new CartDetail();
            }

            $CartDetail->cart_id = $cartId;
            $CartDetail->product_id = $request->product_id;
            $CartDetail->qty = $request->prod_qty;
            $CartDetail->save();

    }


    
}
