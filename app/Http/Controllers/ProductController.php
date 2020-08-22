<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductRug;
use App\ProductDecor;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Review;
use App\Libraries\ConstantsClass;
use App\Http\Controllers\MetaController;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req,$name, $id)
    {
       
        $meta=new MetaController();

        $MetaData=$meta->getMeta($req);

         /*==Related Product items query== by Ghazanfar==*/
        $relProduct=Product::select('id','name','msrp','price','image_url_small')->whereBetween('id', [$id-3, $id])->get();
        


         /*===Query to find product by Ghazanfar===*/
        $productData = Product::find($id);
         
        $constant=new ConstantsClass();
        if($productData->product_type_id === $constant->getproducttypeId()){
             
            $productSize = Product::select('product_rugs.size','product_rugs.color','products.id','products.price','products.msrp','products.image_url_small','products.image_url')
            ->Join('product_rugs','product_rugs.product_id','=','products.id')
            ->where('product_rugs.style', $productData->productRug->style)->get();

      
        } else {
             
            $productSize = Product::select('product_decors.size','product_decors.color','products.id','products.price','products.msrp')
            ->Join('product_decors','product_decors.product_id','=','products.id')
            ->where('product_decors.style', $productData->productDecor->style)->get();
        }

        /*==Fetching Review for review ajax layout by Ghazanfar==*/
         $reviewData=Review::select('id','full_name','comments','product_id','email')->where('product_id',$id)->get();

         return view('product_detail',compact('productData','productSize','brandData','CatData','relProduct','reviewData','MetaData'));
        
    }

    public function ajaxIndex(Request $request){


        $productData = Product::find($request->id);
       
        if($productData->product_type_id === $constant->getparentCategory()){
         /*==Fectching ProductRug on Ajax Request by Ghazanfar==*/
            $productSize = Product::select('product_rugs.size','product_rugs.color','products.id','products.price','products.msrp','products.image_url_small')
            ->Join('product_rugs','product_rugs.product_id','=','products.id')
            ->where('product_rugs.style', $productData->productRug->style)->get();

            $bladeTemplate = "ajax.product_detail_rug_ajax";

      
        } else {
            /*==Fectching ProductDecor on Ajax Request by Ghazanfar==*/
            $productSize = Product::select('product_decors.size','product_decors.color','products.id','products.price','products.msrp')
            ->Join('product_decors','product_decors.product_id','=','products.id')
            ->where('product_decors.style', $productData->productDecor->style)->get();

            $bladeTemplate = "ajax.product_detail_decor_ajax";
        }

        return view($bladeTemplate ,compact('productData','productSize'));
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //  
            dd("hello world show product function");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
