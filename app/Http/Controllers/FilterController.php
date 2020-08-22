<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FilterController extends Controller
{
    //

    /*===Filter through ajax by Ghazanfar 27-1-2020===*/
    public function ajaxproductList(Request $req){
        
    /*==Checking Wether price is null or not by ghazanfar==*/
        //dd($req->filter);
        if(count($req->price)>0){
         
          // $objProduct=Product::select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_rugs.collection as rcollection','product_rugs.size','product_rugs.color','product_decors.collection as collection','product_decors.size','product_decors.color')->Join('product_rugs','product_rugs.product_id','=','products.id')->Join('product_decors','product_decors.product_id','=','products.id')->where($req->filter)->whereBetween('price',$req->price)->paginate(12);

          $objProduct=Product::has('productRug')->select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_rugs.collection as collection','product_rugs.size','product_rugs.color')->Join('product_rugs','product_rugs.product_id','=','products.id')->where($req->filter)->whereBetween('price',$req->price)->where('active',1)->paginate(12);
          // if(count($objProduct)==0){
           
            
          // }
          if(count($objProduct)==0){
                  
             $objProduct=Product::has('productDecor')->select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_decors.collection as collection','product_decors.size','product_decors.color')->Join('product_decors','product_decors.product_id','=','products.id')->where($req->filter)->where('active',1)->whereBetween('price',$req->price)->paginate(12);

          }

           
        }
        else{
          
       // $objProduct=Product::select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_rugs.collection as rcollection','product_rugs.size','product_rugs.color','product_decors.collection as collection','product_decors.size','product_decors.color')->Join('product_rugs','product_rugs.product_id','=','products.id')->Join('product_decors','product_decors.product_id','=','products.id')->where($req->filter)->whereBetween('price',$req->price)->paginate(12);

          $objProduct=Product::has('productRug')->select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_rugs.collection as collection','product_rugs.size','product_rugs.color')->Join('product_rugs','product_rugs.product_id','=','products.id')->where($req->filter)->where('active',1)->paginate(12);
          // if(count($objProduct)==0){
           
            
          // }
          if(count($objProduct)==0){
                  
             $objProduct=Product::has('productDecor')->select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_decors.collection as collection','product_decors.size','product_decors.color')->Join('product_decors','product_decors.product_id','=','products.id')->where($req->filter)->where('active',1)->paginate(12);
            
          }
    
        }
       
      return view('layouts.product_listing',compact('objProduct'));

    }

    /*==Function for price filter ajax==*/
    public function priceList(Request $request){
        /*==Sorting filter on price ghazanfar on 27-1-2020==*/

         // $objProduct=Product::select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_rugs.collection','product_rugs.size','product_rugs.color','product_decors.collection','product_decors.size','product_decors.color')->Join('product_rugs','product_rugs.product_id','=','products.id')->Join('product_decors','product_decors.product_id','=','products.id')->where($request->filter)->orderBy('price',$request->order)->paginate(12);

           
            $objProduct=Product::has('productRug')->select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_rugs.collection','product_rugs.size','product_rugs.color')->Join('product_rugs','product_rugs.product_id','=','products.id')->where($request->filter)->orderBy('price',$request->order)->where('active',1)->paginate(12);
            
            if(count($objProduct)==0){

               $objProduct=Product::has('productDecor')->select('products.id','products.name','products.image_url','products.msrp','products.price','products.brand_id','products.category_id','product_decors.collection','product_decors.size','product_decors.color')->Join('product_decors','product_decors.product_id','=','products.id')->orderBy('price',$request->order)->where($request->filter)->where('active',1)->paginate(12);
              
            }
           
       return view('layouts.product_listing',compact('objProduct'));
    } 

}
