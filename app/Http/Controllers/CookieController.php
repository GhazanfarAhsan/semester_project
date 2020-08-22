<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;

use App\Http\Controllers\CartController;

class CookieController extends Controller
{
    //
   
    public function index(Request $request){

    	if($this->getCookie($request) == null){
    		$this->setCartsItems($request);
    		dd($request->product_id,$request->prod_qty,$this->getCookie($request));
    	} else {
    		$this->setCartsItems($request,$this->getCookie($request));
	   		dd("Call SetCookie Function <hr />",$this->setCookie($request));
    	}

    	
    }


    public function setCookie($cartId, $expiryMinutes){
    	$minutes = 1;
    	$response = new Response('Hello World');
    	$response->withCookie(cookie('SI_CartID',$cartId, $expiryMinutes));
    	return $response;
    }

    public function getCookie(Request $request){
    	$value = $request->cookie('SI_CartID');
    	return $value;
    }

    public function setCartsItems(Request $request, $cartId = 0){

    	dd($cartId);

    		$cart = new CartController();
    		
    		$cart->store($request, $cartId);
    		/*if($cartId == 0){
    			$this->setcookie();
    		}*/
    		//$this->objCart->index($request);

    }

}
