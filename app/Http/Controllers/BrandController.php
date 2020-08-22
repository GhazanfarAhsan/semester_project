<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Controllers\MetaController;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }

    
   public function getProductListPagingTest(Request $req,$dest_link){

    // Working with Meta by Ghazanfar//
        $meta=new MetaController();
        $MetaData=$meta->getMeta($req);


    /*==Fetching brand and product by Ghazanfar on 13-02-2020==*/
        $objBrand=Brand::where('dest_link',$dest_link)->where('active',1)->first();
        $objProduct = Product::with('brand:id,name')->where('brand_id', $objBrand->id)->where('active',1)->paginate(12);
        //dd($objProduct);
        if(count($objProduct)>0){

            $productCollection=Product::select('products.id','products.name','pr.size','pr.collection','pr.color','pd.size','pd.collection','pd.color','products.id','products.price as rprice','brands.name as bname','products.brand_id','products.category_id','categories.name as cname')->Join('product_rugs as pr','pr.product_id','=','products.id')->Join('product_decors as pd','pd.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->Join('categories','categories.id','=','products.category_id')->where('products.brand_id',$objBrand->id)->get();
        
            if(count($productCollection)==0){ 

                $productCollection=Product::has('productRug')->select('products.id','products.name','products.price as rprice','pr.size','pr.collection','pr.color','brands.name as bname','products.brand_id','products.category_id','categories.name as cname')->Join('product_rugs as pr','pr.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->Join('categories','categories.id','=','products.category_id')->where('products.brand_id',$objBrand->id)->get();
               //  dd("this is rug");
            }

            if(count($productCollection)==0){

                $productCollection=Product::has('productDecor')->select('products.id','products.name','products.price as rprice','pd.size','pd.collection','pd.color','brands.name as bname','products.brand_id','products.category_id','categories.name as cname')->Join('product_decors as pd','pd.product_id','=','products.id')->Join('brands','brands.id','=','products.brand_id')->Join('categories','categories.id','=','products.category_id')->where('products.brand_id',$objBrand->id)->get();
                
            }
        
        }    
            
        /*====Path for ajax pagination====*/
        $objProduct->withpath('ajax/'.$dest_link.'.htm'); 

        return view('brand',compact('objProduct','productCollection','objBrand','MetaData'));
   }


     public function getProductListPaging($dest_link){

        
        $objBrand=Brand::where('dest_link',$dest_link)->first();
        $objProduct = Product::where('brand_id', $objBrand->id)->where('active',1)->paginate(12);
       
        return view('layouts.product_listing',compact('objProduct'));
    }

}
