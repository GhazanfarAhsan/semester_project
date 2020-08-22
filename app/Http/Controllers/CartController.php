<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartDetail;
use App\Product;
use App\ProductRug;
use App\ProductDecor;
use App\Http\Controllers\MetaController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Libraries\ConstantsClass;
use Carbon\Carbon;
use DateTime;
use App\Brand;
use App\Category;
use Cookie;
use DB;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        //===Retreiving Cart Data With Product=====//

        $Cart_id=$request->cookie('SI_CartID');
        $AllDetail=$this->showCart($Cart_id);
        $ProductDetailSize=$AllDetail[0];
        $TotPrice=$AllDetail[1];
       

        return view('cart',compact('ProductDetailSize','TotPrice'));          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //===Retreiving Cart Data With Product=====//

        $Cart_id=$request->cookie('SI_CartID');

        $AllDetail=$this->showCart($Cart_id);
        $ProductDetailSize=$AllDetail[0];
        $TotPrice=$AllDetail[1];

        return view('cart',compact('ProductDetailSize','TotPrice'));            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //====Upadating the Cart Detail on ajax====////

        $Cart_id=$request->cookie('SI_CartID');
        $CartDetail=CartDetail::where(['cart_id' =>$Cart_id,'product_id'=>$request->product_id])->update(['qty' => $request->qty]);

        $AllDetail=$this->showCart($Cart_id);
        $ProductDetailSize=$AllDetail[0];
        $TotPrice=$AllDetail[1];
              
        return view('ajax.ajax_cart',compact('ProductDetailSize','TotPrice'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
       
     
    }

    public function deleteCartDetial(Request $req){

        //=====Deleting Cart Detail========///

        $Cart_id=$req->cookie('SI_CartID');
        $CartDetail=CartDetail::where(['cart_id' => $Cart_id,'product_id'=>$req->product_id])->delete();
        
        $AllDetail=$this->showCart($Cart_id);
        $ProductDetailSize=$AllDetail[0];
        $TotPrice=$AllDetail[1];

        return view('ajax.ajax_cart',compact('ProductDetailSize','TotPrice'));
    }

    public function ajaxheaderDeleteCart(Request $req){

        //=====Deleting Cart On Header request Detail========///

        $Cart_id=$req->cookie('SI_CartID');
        $CartDetail=CartDetail::where(['cart_id' => $Cart_id,'product_id'=>$req->product_id])->delete();
        
        $AllDetail=$this->showCart($Cart_id);
        $ProductDetailSize=$AllDetail[0];
        $TotPrice=$AllDetail[1];
    
        if($req->header_cart_type==0)
            return view('ajax.ajax_header_cart_area',compact('ProductDetailSize','TotPrice'));
        else
           return view('ajax.ajax_mobile_menu_cart',compact('ProductDetailSize','TotPrice'));
    }

     public function ajaxheaderUpdateCart(Request $req){

        //=====Update Cart On Cart Detail========///
       
        $Cart_id=$req->cookie('SI_CartID');
        $CartDetail=CartDetail::where(['cart_id' => $Cart_id,'product_id'=>$req->product_id])->update(['qty' => $req->qty]);
        
        $AllDetail=$this->showCart($Cart_id);
        $ProductDetailSize=$AllDetail[0];
        $TotPrice=$AllDetail[1];

        if($req->header_cart_type==0)
            return view('ajax.ajax_header_cart_area',compact('ProductDetailSize','TotPrice'));
        else
           return view('ajax.ajax_mobile_menu_cart',compact('ProductDetailSize','TotPrice')); 
    }

    public function showCart($cart_id){

        // ==Retrieve Data for Product Type==// 

        $CartDetail=CartDetail::select('cart_details.id','cart_details.product_id','cart_details.cart_id','products.id as pid','products.sku','products.product_type_id')->Join('products','cart_details.product_id','=','products.id')->where('cart_details.cart_id',$cart_id)->get();

        $TotPrice=0.0;                  // For Total Price
        $ProductDetailSize=array();     // For Cart Detail

        $constant=new ConstantsClass();
        foreach($CartDetail as $rsCartDetail){
            if($rsCartDetail->product_type_id == $constant->getproducttypeId()){

                ///====Retrieving Products======/////

                $ProductSize=Product::select('products.id','products.name','products.sku','products.price as sprice','products.msrp as smsrp','products.brand_id','products.image_url_small','product_rugs.id','product_rugs.product_id','product_rugs.size','cart_details.id','cart_details.product_id','cart_details.qty','cart_details.cart_id','brands.id as bid','brands.name as bname')->Join('product_rugs','product_rugs.product_id','=','products.id')->Join('cart_details','cart_details.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->find($rsCartDetail->product_id);
            }
            else{

                ///====Retrieving Products======/////
                $ProductSize=Product::select('products.id','products.name','products.sku','products.price as sprice','products.msrp as smsrp','products.brand_id','products.image_url_small','product_decors.id','product_decors.product_id','product_decors.size','cart_details.id','cart_details.product_id','cart_details.qty','cart_details.cart_id','brands.id as bid','brands.name as bname')->Join('product_decors','product_decors.product_id','=','products.id')->Join('cart_details','cart_details.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->find($rsCartDetail->product_id);
                }
            $TotPrice+=($ProductSize->sprice*$ProductSize->qty);
            array_push($ProductDetailSize, $ProductSize);
        }

        return array($ProductDetailSize,$TotPrice);
    }
   
}
